<body>
<h1> Product Discount Calculator </h1>

<form  method="POST">
    <p>@csrf</p>
<label>Product Description</label>
    <p>
        <input type="text" name="name" placeholder="Mô tả sản phẩm ">
    </p>
    <label>List Price</label>
    <p>
        <input type="text" name="price" placeholder="Giá ">
    </p>
    <label>Discount Percent</label>
    <p>
        <input type="text" name="discountPercent" placeholder="Giá chiết khấu ">
    </p>
    <p>
        <button type="submit">Kiểm Tra</button>
    </p>
</form>
</body>
