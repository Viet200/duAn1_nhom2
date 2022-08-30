<!-- entry-header-area start -->
<div class="entry-header-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="entry-header">
          <h1 class="entry-title">DANH SÁCH SẢN PHẨM YÊU THÍCH</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- entry-header-area end -->

<!-- wishlist-area start -->
<div class="wishlist-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="wishlist-content">
          <form action="#">
            <div class="wishlist-table responsive">
              <table>
                <thead>
                  <tr>
                    <th class="product-remove"><span class="nobr">Remove</span></th>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name"><span class="nobr">Product Name</span></th>
                    <th class="product-price"><span class="nobr"> Unit Price </span></th>
                    <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                    <th class="product-add-to-cart"><span class="nobr">Add to Cart </span></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($favorite as $item) : ?>
                    <tr>
                      <td class="product-remove"><a href="<?= BASE_URL . 'favorite/xoa?id=' . $item['id'] ?>">×</a></td>
                      <td class="product-thumbnail"><a href="<?= BASE_URL . 'chitietsp?id=' . $item['product_id'] ?>"><img style="width: 100px; height: 150px" class="primary-image" src="<?= IMAGE_URL . $item['thumbnail'] ?>" alt="<?= $item['title'] ?>" /></a></td>
                      <td class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $item['product_id'] ?>"><?= $item['title'] ?></a></td>
                      <td class="product-price"><span class="amount"><?= number_format($item['price']) ?>đ</span></td>
                      <td class="product-stock-status"><?= $item['status'] == 1 ? "Còn hàng" : "Hết hàng" ?></td>
                      <td class="product-add-to-cart"><a href="<?= BASE_URL . 'add-to-cart?id=' . $item['id'] ?>"> Add to Cart</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- wishlist-area end -->