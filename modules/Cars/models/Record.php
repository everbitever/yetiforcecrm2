<?php

/**
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

class Cars_Record_Model extends Vtiger_Record_Model
{
    public function saveOperatingCost(string $from, string $to): void
    {
        $dataReader = (new App\Db\Query())
            ->select('u_yf_cars.carsid, (((SUM(u_yf_departures.departure_travel_km) / 100) * u_yf_cars.car_fuel_consumption) * 5) AS sum_km')
            ->from('u_yf_cars')
            ->innerJoin('u_yf_departures', 'u_yf_cars.carsid = u_yf_departures.departure_car_id')
            ->where(['between', 'u_yf_departures.departure_date', $from, $to])
            ->groupBy(['u_yf_cars.carsid'])
            ->createCommand()
            ->query()
        ;

        while ($row = $dataReader->read()) {
            App\Db::getInstance()
                ->createCommand()
                ->update('u_yf_cars', ['car_operating_cost' => round($row['sum_km'], 2)], ['carsid' => $row['carsid']])
                ->execute()
            ;
        }

        $dataReader->close();
    }
}