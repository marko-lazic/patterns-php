<?php

/**
 * Created by IntelliJ IDEA.
 * User: marko
 * Date: 5.4.17.
 * Time: 08.53
 */


class AppointmentMaker2
{
    private $endoder;

    /**
     * AppointmentMaker2 constructor.
     * @param $endoder
     */
    public function __construct(ApptEncoder $endoder)
    {
        $this->endoder = $endoder;
    }

    public function makeAppointment()
    {
        return $this->encoder->encode();
    }


}