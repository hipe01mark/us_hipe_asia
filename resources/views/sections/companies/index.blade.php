<section id="companies" class="s-companies">
    <div class="l-wrapper l-wrapper--fluid l-wrapper--padded-y">
        <div class="c-title ">
            <h2>Our clients</h2>
        </div>
        <div class="s-companies__description ">
            <p>We are committed to deliver the highest standard of service to our clients</p>
        </div>
        <div class="s-companies__logos parent">
            @for ($i = 1; $i <= 10; $i++)
                <div class="s-companies__logos__item div{{ $i }}">
                    <img src="{{ asset('assets/images/companies/' . 'company_') . $i . '.webp' }}"
                        alt="company_{{ $i }}" height="100%" width="100%">
                </div>
            @endfor
        </div>
    </div>
</section>
