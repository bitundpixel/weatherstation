<?php

namespace lib\Weatherstation;


class WeatherstationReader
{

    /**
     * @var string
     */
    protected $dataPath;

    protected $data = array();

    protected $sensorMap = array(
        3 => 'Temp. Sensor 1',
        4 => 'Temp. Sensor 2',
        5 => 'Temp. Sensor 3',
        6 => 'Temp. Sensor 4',
        7 => 'Temp. Sensor 5',
        8 => 'Temp. Sensor 6',
        9 => 'Temp. Sensor 7',
        10 => 'Temp. Sensor 8',
        11 => 'Moist Sensor 1',
        12 => 'Moist Sensor 2',
        13 => 'Moist Sensor 3',
        14 => 'Moist Sensor 4',
        15 => 'Moist Sensor 5',
        16 => 'Moist Sensor 6',
        17 => 'Moist Sensor 7',
        18 => 'Moist Sensor 8',
        19 => 'Temp. Combi Sensor',
        20 => 'Moist Combi Sensor',
        21 => 'Wind Speed Sensor',
        22 => 'Precipitation Sensor',
        23 => 'Rain Sensor',
    );

    public function __construct($dataPath)
    {
        $this->setDataPath($dataPath);
        $this->convert();
    }

    protected function convert()
    {
        if (file_exists($this->dataPath)) {
            $rawData = explode(';', file_get_contents($this->dataPath));
            $data = array();

            foreach ($rawData as $key => $item) {
                if (strlen($item) > 0 && isset($this->sensorMap[$key])) {
                    $data[$this->sensorMap[$key]] = $item;
                }
            }

            $this->setData($data);
        }
    }

    /**
     * @param array $data
     *
     * @return WheaterstationReader
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $dataPath
     *
     * @return WheaterstationReader
     */
    public function setDataPath($dataPath)
    {
        $this->dataPath = $dataPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataPath()
    {
        return $this->dataPath;
    }



}
