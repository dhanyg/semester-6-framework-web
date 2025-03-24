<?php

namespace App\Models;

use Illuminate\Support\Facades\Session;

class MataKuliah
{
   public static function getMataKuliah()
   {
      return Session::get('matakuliah', []);
   }

   public static function all(): array
   {
      return self::getMataKuliah();
   }

   public static function find(int $id): ?array
   {
      $mataKuliah = Session::get('matakuliah');
      return $mataKuliah[$id] ?? null;
   }

   public static function save(array $data): void
   {
      $mataKuliah = self::getMataKuliah();
      $newId = array_keys($mataKuliah) ? max(array_keys($mataKuliah)) + 1 : 1;
      $mataKuliah[$newId] = $data;
      Session::put('matakuliah', $mataKuliah);
   }

   public static function update(int $id, array $data): void
   {
      $mataKuliah = Session::get('matakuliah');
      if ($mataKuliah) {
         $mataKuliah[$id] = $data;
         Session::put('matakuliah', $mataKuliah);
      }
   }

   public static function delete(int $id): void
   {
      $mataKuliah = Session::get('matakuliah');
      if ($mataKuliah) {
         unset($mataKuliah[$id]);
         Session::put('matakuliah', $mataKuliah);
      }
   }
}
