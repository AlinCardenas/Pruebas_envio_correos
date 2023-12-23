<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar pagos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 overflow-x-auto">
                <table class="table table-bordered text-center table-auto w-full">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Concepto de pago</th>
                            <th>Fecha de pago</th>
                            <th>folio</th>
                            <th>Acciones</th>
                        </tr>
                        <tbody>
                            @foreach ($payments as $payment)
                            <tr>
                                <td>{{$payment->id}} </td>
                                <td>{{$payment->name}} </td>
                                <td>{{$payment->amount}} </td>
                                <td>{{$payment->payment_concept}} </td>
                                <td>{{$payment->payment_date}} </td>
                                <td>{{$payment->invoice}} </td>
                                <td>
                                    <a class="btn btn-success my-2"  href="{{route('generate_data_report.edit',$payment)}}">Editar</a>
                                    <a class="btn btn-warning my-2"  href="{{route('generate_data_report.show',$payment)}}">Ver</a>
                                    <form action="{{route('generate_data_report.destroy',$payment)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger my-2" type="submit">Eliminar</button>
                                    </form>
                                    {{-- <a href="{{route('generate_pdf', $payment)}}">Generar reporte</a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>