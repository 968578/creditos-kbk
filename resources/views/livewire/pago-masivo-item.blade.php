<div>
    <div class="grid grid-cols-7 items-center justify-center">
        <h1>{{$account->debtor->name}}</h1>
        <h1>{{number_format($account->monto)}}</h1>
        <h1>{{$account->fecha_desembolso}}</h1>
        <h1>cuota numero 3</h1>
        <h1>{{number_format($account->valor_cuota)}}</h1>
        <h1>{{{date("Y-m-d")}}}</h1>
        <input type="checkbox" >
    </div>
    <button>Pagar</button>
</div>
