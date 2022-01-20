<?php

function getDB()
{
  $db = new PDO('sqlite:./backend/storeData.db');
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  return $db;
}

function getProducts($db)
{
  $stmt = $db->prepare('SELECT * FROM Product');

  $stmt->execute();

  return $stmt->fetchAll();
}

function getProductByCode($db, $code)
{
  $stmt = $db->prepare('SELECT * FROM Product where code=?');

  $stmt->execute([$code]);

  return $stmt->fetch();
}

function getCategoriesBySex($db, $sex)
{
  $stmt = $db->prepare('SELECT category FROM Product where sex=?');

  $stmt->execute([$sex]);

  return $stmt->fetchAll();
}

function getManufacturesBySex($db, $sex)
{
  $stmt = $db->prepare('SELECT brand FROM Product where sex=?');

  $stmt->execute([$sex]);

  return $stmt->fetchAll();
}

function getProductsBySex($db, $sex)
{
  $stmt = $db->prepare('SELECT * FROM Product where sex=?');

  $stmt->execute([$sex]);

  return $stmt->fetchAll();
}

function getProductsByCategory($db, $category)
{
  $stmt = $db->prepare('SELECT * FROM Product where category=?');

  $stmt->execute([$category]);

  return $stmt->fetchAll();
}

function getProductsBySexCategory($db, $sex, $category)
{
  $stmt = $db->prepare('SELECT * FROM Product where sex=? and category=?');

  $stmt->execute([$sex, $category]);

  return $stmt->fetchAll();
}

function getUsers($db) {
    
    $$stmt = $db->prepare('SELECT * FROM User');
    $stmt->execute();

    return $stmt->fetch();
}

?>
