<?php

  function getAllLists($id) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM lists JOIN
                                users USING (idUser)
                           WHERE idUser = ?
                           ORDER BY lists.id DESC");
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getListById($id) {
    global $dbh;
    $stmt = $dbh->prepare("SELECT *
                           FROM product JOIN
                                category USING (cat_id)
                           WHERE pro_id = ?");
    $stmt->execute(array($id));
    return $stmt->fetch();
  }

  function getCartProducts() {
    global $dbh;

    $products = array();

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $id => $qty) {
          $product = getProductById($id);
          if ($product !== false) {
            $product['qty'] = $qty;
            $products[] = $product;
          }
        }
    }

    return $products;
  }

?>
