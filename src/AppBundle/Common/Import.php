<?php

namespace AppBundle\Common;

class Import
{
    public function import($file)
    {
        $this->check($file);

        $datas = $this->getData($file);
        var_dump($datas);exit();
        $response = $this->validateData($datas);
    }

    public function getData($file)
    {
        $datas = array();

        $PHPExcel        = \PHPExcel_IOFactory::load($file);
        $worksheet       = $PHPExcel->getActiveSheet();
        $highestRow         = $worksheet->getHighestRow();
        $highestColumn      = $worksheet->getHighestColumn();
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn);

        for ($row = 2; $row <= $highestRow; $row++) {
            for ($col = 0; $col < $highestColumnIndex; $col++) {
                $infoData = $worksheet->getCellByColumnAndRow($col, $row)->getFormattedValue();
                $columnsData[$col] = $infoData . "";
            }

            if ($row == 2) {
                $keys = $columnsData;
            } else {
                $datas[] = array_combine($keys, $columnsData);
            }
        }

        return $datas;
    }

    /**
     * @todo 添加数据的验证
     */
    protected function validateData($datas)
    {
        foreach ($datas as $key => $data) {
            if (empty($data['number'])) {
                unset($datas[$key]);
            }
        }
        return $datas;
    }

    /**
     * @todo  需要校验下仅是改变文件后缀所产生的xls文件
     */
    protected function check($file)
    {
        return true;
    }
}