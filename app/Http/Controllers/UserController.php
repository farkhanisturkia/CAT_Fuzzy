<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //halaman index
        // $users = User::where('role', 'teacher')->orWhere('id', Auth::id())->with(['mapel'])->get();
        $users = User::where('role', 'teacher')->orWhere('role', 'admin')->with(['mapel'])->get();
        $data = [
            'users' => $users
        ];
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //form add
        $datapengguna  = 'active';
        $titlepage     = 'Data Pengguna';
        return view('user.create', compact('datapengguna', 'titlepage'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // dd($request->all());
        $user = User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
            'mapel_id'  => $request->mapel_id,
        ]);
        if($user){
            return redirect()->back()->with(['success' => 'Data Siswa baru berhasil ditambahkan!']);
        }else{
            return redirect()->back()->with(['failed' => 'Data siswa gagal ditambahkan!']);
        }
        // try {
        //     User::create($request->validated());

        //     return redirect()->back()->with(['success' => 'Data pengguna baru berhasil ditambahkan']);
        // }

        // catch (Exception $e) {
        //     return redirect()->back()->with(['failed' => 'Data telah ada. Silahkan dicek kembali']);
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $data = [
            'user' => $user];
        return view('user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // dd($request->all());
        try {
            $validated = $request->safe()->except('password');
            if(!empty($request->password)){
                $validated['password'] = Hash::make($request->password);
            }
            $user->update($validated);

            return redirect()->back()->with(['success' => 'Data pengguna berhasil diubah']);
        }

        catch ( Exception $e) {
            return redirect()->back()->with(['failed' => 'Data pengguna tidak berhasil diubah']);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (!$user) {
            return redirect()->route('user.index')->with(['success' => 'Data pengguna tidak berhasil dihapus']);
        }

        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'Data pengguna berhasil dihapus']);
    }
}
