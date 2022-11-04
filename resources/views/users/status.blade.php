@extends('layouts.master')

@section('title')
    <title>Set Status</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Set Status</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></li>
                            <li class="breadcrumb-item active">Set Status</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('users.setStatus', $user->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                        @card
                            @slot('title')
                            @endslot
                            
                            @if (session('success'))
                                @alert(['type' => 'success'])
                                    {{ session('success') }}
                                @endalert
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>:</td>
                                            <td>
                                            <select class="form-control" name="status" required="required">
                                                <option value="1" {{ $user->status === 1 ? 'selected' : '' }} >Aktif</option>
                                                <option value="0" {{ $user->status === 0 ? 'selected' : '' }} >Suspend</option>
                                            </select>
                                            </td>
                                        </tr>

                                        
                                    </thead>
                                </table>
                            </div>
                            @slot('footer')
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm float-right">
                                        Set Status
                                    </button>
                                </div>
                            @endslot
                        @endcard
                        </form>
                    </div>

                    

                </div>
            </div>
        </section>
    </div>
@endsection
