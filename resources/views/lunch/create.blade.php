<h3>新增餐點</h3>


<form action="/Update" method="POST">
    {{csrf_field()}}
    <table>
        <tr>
            <td>
                店家名稱
            </td>
            <td>
                <input type="text" name="newMeal" placeholder="請輸入">
            </td>
        </tr>
        <tr>
            <td>
                類型
            </td>
            <td>
                <select name="lunchclass">
                    <option value="">Select...</option>
                    <option value="rice">飯</option>
                    <option value="noodle">麵</option>
                    <option value="fried">炸物</option>
                    <option value="light">輕熟食</option>
                    <option value="dumpling">水餃</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="新增商品">
            </td>
        </tr>
        <tr>
            <td>
                <a href="/index"><input type="button" value="回首頁"></a>
            </td>
        </tr>
    </table>
</form>