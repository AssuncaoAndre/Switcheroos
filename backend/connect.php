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

function getUsers($db) {
    
    $$stmt = $db->prepare('SELECT * FROM User');
    $stmt->execute();

    return $stmt->fetch();
}

?>
