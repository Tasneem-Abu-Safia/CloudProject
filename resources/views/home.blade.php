@extends('Dashboard.master')

@section('title')
    {{__('dashboard')}}
@endsection

@section('Page-title')
    Dashboard
@endsection

@section('js')
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PGTEC6SEE8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PGTEC6SEE8');
</script>
@endsection

@section('content')

@endsection

