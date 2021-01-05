<?php
abstract class Hinhhoc{
    abstract public function tinhDienTich();
    abstract public function tinhChuVi();
}

class HinhVuong extends Hinhhoc {

    public function tinhDienTich()
    {
        // TODO: Implement tinhDienTich() method.
    }

    public function tinhChuVi()
    {
        // TODO: Implement tinhChuVi() method.
    }
}

interface TuGiac{
    function tinhChuVi();
}

class HinhChuNhat implements TuGiac {

    function tinhChuVi()
    {
        // TODO: Implement tinhChuVi() method.
    }
}

