<h2>午餐吃啥</h2>

<form action="/RandomLunch">
{{csrf_field()}}
    <table>
        @empty($data)
            <tr>
                <td>
                    資料庫內無資料，請先<a href="/Create">新增</a>
                </td>
                <td>
                    <a href="/index"><input type="button" value="回首頁"></a>
                </td>
            </tr>
            @else
                <tr>
                    <td>
                        今天要吃的是：
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$data->StoreName}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="隨機產生">
                    </td>
                    <td>
                        <a href="/index"><input type="button" value="回首頁"></a>
                    </td>
                </tr>
        @endempty
    </table>
</form>