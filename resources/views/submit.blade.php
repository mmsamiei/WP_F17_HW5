<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> submit </title>
</head>
<body>
    <form action="/submit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="title"> title </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="original_title"> original_title </label>
        <input type="text" name="original_title" id="original_title">
        <br>
        <label for="rate"> rate </label>
        <input type="number" name="rate" id="rate">
        <br>
        <label for="year"> year </label>
        <input type="number" name="year" id="year">
        <br>
        <label for="length"> length </label>
        <input type="number" name="length" id="length">
        <br>
        <label for="language"> language </label>
        <input type="text" name="language" id="language">
        <br>
        <label for="country"> country </label>
        <input type="text" name="country" id="country">
        <br>
        <label for="description"> description </label>
        <input type="text" name="description" id="description">
        <br>
        <label for="director"> director </label>
        <input type="text" name="director" id="director">
        <br>
        <label for="writer"> writer </label>
        <input type="text" name="writer" id="writer">
        <br>
        <label for="stars"> stars </label>
        <input type="text" name="stars" id="stars">
        <br>
        <label for="category"> category </label>
        <input type="text" name="category" id="category">
        <br>
        <label for="cover"> cover </label>
        <input type="file" name="cover" id="cover">
        <br>
        <button class= "btn btn-success float-xl-left mt-2">ثبت</button>
    </form>
</body>
</html>