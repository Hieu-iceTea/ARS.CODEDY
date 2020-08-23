<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');

        if ($keyword != '') {
            $users = User::search($keyword);

            if (count($users) > 0) {
                return view('admin.user.index', compact('users'));
            }
            return view('admin.user.index', compact('users'))->withErrors('No search results. Try to search again!');
        }

        $users = User::getItems();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.user.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->user_name = $request->get('user_name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->level = $request->get('level');
        $user->gender = $request->get('gender');
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->dob = $request->get('dob');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
//        $user->loyalty_number = $request->get('loyalty_number');
        $user->active = $request->get('active');

        $user->save();

        return redirect('admin/user/' . $user->user_id)->with('notification', 'Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $user = User::getItemById($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $user = User::getItemById($id);

        return view('admin.user.create-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        User::where('user_id', $id)->update([
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
//            'password' => $request->get('password'),
            'level' => $request->get('level'),
            'gender' => $request->get('gender'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'dob' => $request->get('dob'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
//            'loyalty_number' => $request->get('loyalty_number'),
            'active' => $request->get('active'),
        ]);

        return redirect('admin/user/' . $id)->with('notification', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        //
    }
}
