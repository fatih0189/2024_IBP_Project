@extends('admin_panel_layout')

@section('title', 'Tüm Raporlar')

@section('form')
            <div class="card-header">
                <h3 class="card-title">Raporlar Listesi</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>İçerik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports->sortBy('role') as $report)
                            <tr>
                                <td>{{ $report->tittle }}</td>
                                <td>{{ $report->description }}</td>
                                <td>{{ Str::substr($report->content, 0, 150) }}...</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection
