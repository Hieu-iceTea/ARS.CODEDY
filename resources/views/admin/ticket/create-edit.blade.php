@extends('admin.layout.master')

@section('title', request()->segment(3) == 'create' ? 'Create Ticket' : 'Edit Ticket')

@section('main')

    {{-- Code here ... --}}

@endsection
