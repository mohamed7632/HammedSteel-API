<?php

namespace App\Http\Controllers;

use App\ClientAccount;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    function add($name, $money, $type)
    {
        $client = ClientAccount::all();
        $bool = true;
        $id = 0;
        if (sizeof($client) > 0) {
            foreach ($client as $c) {
                if ($c->name == $name && $c->type == $type) {
                    $bool = false;
                    $id = $c->id;
                    break;
                }
            }
        }
        if (!$bool) {
            $client = ClientAccount::find($id);
            $new['money']  = $client->money + $money;
            ClientAccount::where('id', $id)->update($new);
            $client = ClientAccount::find($id);
            return $client->toJson();
        } else {
            $client = new ClientAccount();
            $client->name = $name;
            $client->money = $money;
            $client->type = $type;
            $client->save();
            return $client->toJson();
        }
    }
    function update($name, $money, $type)
    {
        $client = ClientAccount::all();
        $id = 0;
        foreach ($client as $c) {
            if ($c->name == $name && $c->type == $type) {
                $id = $c->id;
                break;
            }
        }
        if ($id != 0) {
            $client = ClientAccount::find($id);
            $new['money']  = $client->money - $money;
            ClientAccount::where('id', $id)->update($new);
            $client = ClientAccount::find($id);
            return $client->toJson();
        }
    }
    function getByType($type)
    {
        $client = ClientAccount::where('type', $type)->get();
        return $client->toJson();
    }
    function getAllPaid($type)
    {
        $client = ClientAccount::where('type', $type)->sum('money');
        return $client;
    }
}
