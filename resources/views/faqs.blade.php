@extends('layouts.frontend')

@section('content')
    <!--==================== FAQS ====================-->
    <section class="faq section">
        <div class="faq__container container">
            <h2 class="faq__title">Frequently Asked Questions</h2>

            <div class="faq__content">
                <!-- FAQ Item 1 -->
                <div class="faq__item">
                    <input type="checkbox" id="faq1" class="faq__trigger">
                    <label for="faq1" class="faq__question">Question 1: What is Lorem Ipsum?</label>
                    <div class="faq__answer">
                        Answer 1: Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq__item">
                    <input type="checkbox" id="faq2" class="faq__trigger">
                    <label for="faq2" class="faq__question">Question 2: Why do we use it?</label>
                    <div class="faq__answer">
                        Answer 2: It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq__item">
                    <input type="checkbox" id="faq3" class="faq__trigger">
                    <label for="faq3" class="faq__question">Question 3: Where does it come from?</label>
                    <div class="faq__answer">
                        Answer 3: Contrary to popular belief, Lorem Ipsum is not simply random text.
                    </div>
                </div>
                <!-- Add more FAQ items here -->
            </div>
        </div>
    </section>
    <!--==================== FAQS ====================-->
@endsection

<style>
    /* FAQ Section Styles */
    .faq__container {
        padding: 20px;
        text-align: center;
        /* Center the text */
    }

    .faq__title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .faq__item {
        margin-bottom: 20px;
    }

    .faq__trigger {
        display: none;
    }

    .faq__question {
        font-weight: bold;
        cursor: pointer;
        display: block;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .faq__question:hover {
        background-color: #e9e9e9;
    }

    .faq__answer {
        display: none;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .faq__trigger:checked+.faq__question+.faq__answer {
        display: block;
    }
</style>
