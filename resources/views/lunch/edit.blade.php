<h3>修改</h3>


<form action="/EditResult" method="POST">
    {{csrf_field()}}
        <table>
        @foreach($editdata as $data)
            <input type="hidden" name="S_id" value="{{$data->S_id}}">
            <tr>
                <td>
                    店家名稱
                </td>
                <td>
                    <input type="text" name="newMeal" value="{{$data->StoreName}}">
                </td>
            </tr>
            <tr>
                <td>
                    類型
                </td>
                <td>
                    <select name="lunchclass">
                        <option value="{{$data->Class}}">{{$data->Class}}</option>
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
                    資訊
                </td>
                <td>
                    <input type="text" name="information" value="{{$data->Information}}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="修改商品">
                </td>
            </tr>
            <tr>
                <td>
                    <a href="/index"><input type="button" value="回首頁"></a>
                </td>
            </tr>
        @endforeach
        </table>
</form>