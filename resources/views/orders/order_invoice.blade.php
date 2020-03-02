<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Meaza Food | Order Invoice-{{$OID}}</title>
    <style>
        body{
            -webkit-print-color-adjust:exact;
        }
    </style>
</head>
<body>
<table width="95%" align="center">
    <tr>
        <td width="70%">
            <img src="{{asset('theme/img/logo.png')}}" class="rounded img-fluid">
            <p class="mt-5">Company Name : Meaza Food</p>
            <p>
                Contact Details : +90 xxx xxx xx xx
            </p>
            <p>
                Address :  Divan Residence at Bomonti Plaza Cumhuriyet
            <p>
                Harika Sk. No: 4, 34380 Şişli/İstanbul.
            </p>
            </p>
        </td>
        <td>
            <p class="mt-5 text-left">
                Invoice Date : <span>{{$order->oDate()}}</span>
            </p>

            <p class="text-left">
                Invoice No : <span>{{$OID}}</span>
            </p>
        </td>
    </tr>

</table>
<br><br>
<table width="95%" align="center">
    <tr>
        <td>
            <h3 class="border-bottom">BILL TO :</h3>
            <dl>
                <dt>{{$order->user->name}}</dt>
                <dt>{{$order->user->email}}</dt>
            </dl>
        </td>
        <td>
            <h3 class="border-bottom">SHIP TO :</h3>
            <dl>
                <dt>{{$order->user->name}}</dt>
            </dl>
        </td>
    </tr>
</table>
<br><br>
<hr>
<h2 align="center">ORDER SUMMERY</h2>
<table width="95%" >
    <thead >
    <tr align="center" style="background-color: #d5d5d5">
        <th scope="col">Product Name</th>
        <th scope="col">QTY</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Discount</th>
        <th scope="col">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($order->items as $item)
        <tr align="center" style="background-color: #f5f5f5">
            <td>{{$item->product->title}}</td>
            <td>{{$item->amount}}</td>
            <td>{{$item->price}}.00$</td>
            <td>{{$item->discount}}</td>
            <td>
                @if($item->discount == 0)
                    {{$item->price * $item->amount}}.00$
                @elseif($item->discount > 0)
                    @if(strpos($item->discount,'%'))
                        {{($item->price * (100 - rtrim($item->discount,'%')))*$item->amount / 100}}
                    @else
                        {{($item->price * $item->amount)-$item->discount}}.00$
                    @endif

                @else
                    {{$item->price * $item->amount}}.00$
                @endif
            </td>
        </tr>

        <tr align="center">
            <td colspan="4" align="right">Discount :</td>
            <td style="background-color: #d5d5d5">
                {{$order->discount}}.00$
            </td>
        </tr>
        <tr align="center">
            <th colspan="4" align="right">TOTAL :</th>
            <td style="background-color: #d5d5d5">
                <b>{{$order->summary}}.00$</b>
            </td>
        </tr>
    @endforeach

    </tbody>
</table>
<hr>
<p class="border pl-5 pt-5 pb-5">
    {{$order->note}}
</p>

</body>
</html>
