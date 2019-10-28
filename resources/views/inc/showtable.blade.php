<div class="card">
        <div class="card-header">
            <h3>Datos del registro</h3>
        </div>
        <?php
        //Si no se define previamente un array para los campos que no queremos mostrar
        //entonces definimos uno vacio para evitar un error 
        if (!isset($unwanted))
            $unwanted = array();
        ?>
        <table class="table table-bordered">
            <tbody>
            @foreach ($model->getAttributes() as $attr => $val)
                @if (!in_array($attr, $unwanted))
                <tr>
                        <th scope="row">{{ucfirst(str_replace('_', ' ', $attr))}}</th>
                        <td>{{$val}}</td>
                </tr>              
                @endif
            @endforeach
            </tbody>
        </table>

</div>

