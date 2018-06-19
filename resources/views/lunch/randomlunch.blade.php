<h2>午餐吃啥</h2>

<form action="/RandomLunch">
{{csrf_field()}}
    <table>
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
        </tr>
    </table>
</form>