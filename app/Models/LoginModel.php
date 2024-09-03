<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $db;
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'id',
        'username',
        'password',
        'role',
        'nama_lengkap',
        'nama_alias'
    ];

    public function getLogin($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getUser()
    {
        return $this->db->table('user')
            ->orderBy('role', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getUserid($id)
    {
        return $this->db->table('user')->select('user.*')->where('id', $id)->get()->getResultArray();
    }
}
