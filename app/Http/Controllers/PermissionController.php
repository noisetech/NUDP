<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('pages.permission.index');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {

            $data = Permission::all();

            return datatables()->of($data)
                ->addColumn('action', function ($data) {
                    $button = '<div class="d-flex justify-content-start">
            <a class="btn btn-sm btn-warning mx-1" id="edit" data-id="' . $data->id . '" style="background-color: #5e63b6 !important;">
             <i class="fas fa-sm fa-edit px-1"></i>   Edit
            </a>

            <a class="btn btn-sm btn-danger" id="hapus" data-id="' . $data->id . '" style="background-color: #5e63b6 !important;">
                <i class="fas fa-sm fa-trash-alt px-1"></i>   Delete
            </a>

        </div>';

                    return $button;
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }


        $permission = new Permission();
        $permission->name = $request->name;
        $permission->guard_name = 'web';
        $permission->save();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'title' => 'Success',
                'message' => 'Add Permissions'
            ], 200);
        }
    }


    public function getDataById(Request $request)
    {
        $permission = Permission::find($request->id);

        if ($permission != null || !empty($permission)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully get data',
                'data' => $permission
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'Something went wrong'
            ], 500);
        }
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $permission = Permission::find($request->id);
        $permission->name = $request->name;
        $permission->guard_name = 'web';
        $permission->save();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully updated permission'
            ], 200);
        }
    }


    public function destroy(Request $request)
    {
        $permission = Permission::findOrFail($request->id);

        $permission->delete();

        if ($permission) {
            return response()->json([
                'status' => 'success',
                'message' => 'Success delete permission'
            ], 200);
        }
    }
}
