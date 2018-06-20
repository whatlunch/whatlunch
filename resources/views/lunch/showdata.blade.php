<h2>資料庫內資料</h2>

<form action="{{Url('ShowAllData')}}" method="GET">
    <table>
        <tr>
            <td>
                搜尋
            </td>
            <td>
                <input type="text" name="search">
            </td>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>

<form action="{{Url('PartRandom')}}" method="POST">
    {{csrf_field()}}
    <table>
        @foreach($alldata as $data)
            <tr>
                <td>
                    <a href="/Information?StoreName={{$data->StoreName}}">{{$data->StoreName}}</a>
                </td>
                <td>
                    <input type="checkbox" name="checkdata[]" value="{{$data->StoreName}}" checked>
                </td>
                <td>
                    <a href="/Edit?S_id={{$data->S_id}}">修改</a>
                </td>
                <td>
                    <a href="/Delete?S_id={{$data->S_id}}">刪除</a>
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
            <input type="submit" value="隨機產生">
            </td>
            <td>
            <a href="/index"><input type="button" value="回首頁"></a>
            </td>
        </tr>
    </table>
</form>
