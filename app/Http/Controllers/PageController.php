<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Site-Map (Hiếu iceTea)
    public function getIndex()
    {
        return view('Page.Home');
    }

    public function getBooking($tab)
    {
        return view('Page.booking.step' . $tab);
    }

    public function getTicket()
    {
        return view('Page.ticket.index');
    }

    public function getTicketDetail($id)
    {
        return view('Page.ticket.detail');
    }

    public function getTicketEdit($id)
    {
        return view('Page.ticket.edit');
    }

    public function getSchedule()
    {
        return view('Page.schedule.index');
    }

    public function getScheduleDetail($code)
    {
        return view('Page.schedule.detail');
    }

    public function getAccount() {
        return view('Page.account.index');
    }

    public function getLogin() {
        return view('Page.account.login');
    }

    public function getRegistration() {
        return view('Page.account.registration');
    }

    //END Site-Map (Hiếu iceTea)

    public function getContact(){
       return view('Page.contact');
    }

    public function getNews(){
        return view('Page.news');
    }

    public function getAbout(){
        return view('Page.about');
    }
}
