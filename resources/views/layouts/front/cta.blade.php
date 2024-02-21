@php
    $settings = App\Models\Settings::getValues(['map_iframe', 'cta_heading', 'cta_description', 'cta_button_text']);
@endphp
<section class="map-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="map">
                    {!! $settings['map_iframe'] !!}
                </div>
            </div>
            <div class="col-lg-6 msg-box">
                <div class="message">
                    <h1 class="f-black pt-5 heading-value-inner-msg">
                        {{ $settings['cta_heading'] }}
                    </h1>
                </div>
                <p class="f-black py-4 p-value-msg"> {{ $settings['cta_description'] }}</p>
                <a href="{{ route('contact') }}" class="btn btn-regular product-btn">
                    {{ $settings['cta_button_text'] }}</a>
            </div>
        </div>

    </div>
</section>
