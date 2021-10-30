@include ("menu")


<table>
    <thead>
    <tr>
        <th>Новостной сайт</th>
        <th>Действие</th>
        <th>Дата добавления</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($news as $key => $link)
        <tr>
            <td>{{ $key }}</td>
            <td><a href="{{ $link }}">Открыть</a></td>
            <td>{{ now() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
