@extends('layouts.app')

@props([
    'title' => __('Hava Durumu'),
    'desc' => __('Aranan şehir veya ülke ile ilgili hava durumu bilgileri sayfası...'),
])

@push('styles')
    {{-- Custom CSS --}}
    <style>
        * {
            font-family: 'figtree', sans-serif;
        }

        .table-container {
            border: 10px solid #e3e3e3;
            display: inline-block;
            width: auto;
        }

        table {
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        table tr th {
            text-align: right;
            padding: 4px 7px;
            border: 1px solid #ddd;
            border-right: 0;
            padding-right: 4px;
        }

        table tr th + td {
            padding-right: 10px;
            border: 0;
            border-bottom: 1px solid #ddd;
        }

        table tr td {
            padding: 7px 10px;
            padding-left: 0;
            border: 1px solid #ddd;
            border-left: 0;
        }

        table caption {
            font-size: 1.2rem;
            font-weight: bold;
            padding: 10px;
            background-color: #ededed;
            border: 1px solid #ededed;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
@endpush

@section('content')
    <div class="table-container">
        <table>
            <caption>{{ $data->city . ' ' . $title }}</caption>
            <tbody>
            <tr>
                <th scope="row">Veri Alınma Zamanı</th>
                <td>:</td>
                <td>{{ $data->dt }}</td>
            </tr>
            <tr>
                <th scope="row">Açıklama</th>
                <td>:&nbsp;</td>
                <td>{{ $data->desc }}</td>
            </tr>
            <tr>
                <th scope="row">Sıcaklık</th>
                <td>:</td>
                <td>{{ $data->temp }} °C</td>
            </tr>
            {{--<tr>
                <th scope="row">İkon</th>
                <td>:</td>
                <td>{{ $data->icon }}</td>
            </tr>--}}
            <tr>
                <th scope="row">En Düşük Sıcaklık</th>
                <td>:</td>
                <td>{{ $data->temp_min }} °C</td>
            </tr>
            <tr>
                <th scope="row">En Yüksek Sıcaklık</th>
                <td>:</td>
                <td>{{ $data->temp_max }} °C</td>
            </tr>
            <tr>
                <th scope="row">Nem</th>
                <td>:</td>
                <td>{{ $data->humidity }} %</td>
            </tr>
            <tr>
                <th scope="row">Rüzgar Hızı</th>
                <td>:</td>
                <td>{{ $data->wind_speed }} m/s</td>
            </tr>
            <tr>
                <th scope="row">Rüzgar Yönü</th>
                <td>:</td>
                <td>{{ $data->wind_deg }} °</td>
            </tr>
            <tr>
                <th scope="row">Görüş Mesafesi</th>
                <td>:</td>
                <td>{{ $data->visibility }} m</td>
            </tr>
            <tr>
                <th scope="row">Hava Basıncı</th>
                <td>:</td>
                <td>{{ $data->pressure }} hPa</td>
            </tr>
            <tr>
                <th scope="row">Güneşin Doğuşu</th>
                <td>:</td>
                <td>{{ $data->sunrise }}</td>
            </tr>
            <tr>
                <th scope="row">Güneşin Batışı</th>
                <td>:</td>
                <td>{{ $data->sunset }}</td>
            </tr>
            <tr>
                <th scope="row">Enlem</th>
                <td>:</td>
                <td>{{ $data->lat }}</td>
            </tr>
            <tr>
                <th scope="row">Boylam</th>
                <td>:</td>
                <td>{{ $data->lon }}</td>
            </tr>
        </table>
    </div>
@endsection

@push('scripts')
    {{-- Custom JS --}}
@endpush
