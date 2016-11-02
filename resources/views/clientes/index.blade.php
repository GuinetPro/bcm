  @foreach ($clientes as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nombre }}</td>
            <td>{{ $c->email }}</td>

          </tr>
        @endforeach