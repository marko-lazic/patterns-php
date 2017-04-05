<?php

/**
 * Created by IntelliJ IDEA.
 * User: marko
 * Date: 5.4.17.
 * Time: 08.52
 */
class AppointmentMaker
{
    public function  makeAppointment()
    {
        $encoder = new BloggsApptEncoder();
        return $encoder->encode();
    }
}