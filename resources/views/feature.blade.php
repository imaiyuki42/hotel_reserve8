@extends('layouts.app')

@section('content')
<div id="feature-wrapper">
    <div class="feature-container">
        <h1 class="feature-title">ホテルの魅力</h1>
        <div class="feature-main__img-container">
            <img class="feature-main__img" src="{{ asset('images/feature_1.jpg') }}" alt="">
        </div>
        <h2 class="feature-main__heading">ラグジュアリーな世界への招待状</h2>
        <p class="feature-main__description">ホテルの魅力は、細部にまでこだわったサービスと贅沢な設備にあります。ホテル内の上質なベッドやタオル、バスアメニティ、部屋に備わるテクノロジーなど、滞在をより快適にするために配慮されています。また、プールやスパ、ジムなどの施設も充実しており、リラックスや健康面のケアもできます。さらに、レストランやバーは、多様なグルメが揃っており、専門家による料理の提供やワインペアリングなど、最高の食体験を提供してくれます。さらに、内装やインテリアもスタイリッシュでエレガントなものが多く、ホテル内の至るところが美しくデザインされています。そして何よりも、スタッフの丁寧なサービスやホスピタリティは、滞在中に最高の思い出を作ることができます。</p>
    </div>
</div>

@endsection