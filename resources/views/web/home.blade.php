<x-website-layout>
    <section class="banners splide">
        <div class="splide__track">
            <ul class="splide__list flex">
                <li class="splide__slide flex h-auto w-full justify-center bg-center">
                    <img class="w-full" src="{{ asset('homepage/slider/slider_1.jpg') }}" alt="" />
                </li>
                <li class="splide__slide flex h-auto w-full justify-center bg-center">
                    <img class="w-full" src="{{ asset('homepage/slider/slider_1.jpg') }}" alt="" />
                </li>
                <li class="splide__slide flex h-auto w-full justify-center bg-center">
                    <img class="w-full" src="{{ asset('homepage/slider/slider_1.jpg') }}" alt="" />
                </li>
                <li class="splide__slide flex h-auto w-full justify-center bg-center">
                    <img class="w-full" src="{{ asset('homepage/slider/slider_1.jpg') }}" alt="" />
                </li>
            </ul>
        </div>
        <div class="splide__progress">
            <div class="splide__progress__bar h-2 bg-lime-500"></div>
        </div>
    </section>

    <div>
        <div class="flex items-center justify-between gap-2 bg-lime-500 text-sm font-bold text-white">
            <div class="relative flex cursor-pointer items-center justify-center py-2 pl-8 odd:bg-green-800">
                <svg fill="currentColor" class="absolute -right-[3rem] z-10 h-9 text-green-800"
                    xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                    text-rendering="geometricPrecision" viewBox="0 0 120 36">
                    <path
                        d="M77.103718 36C98.551859 36 98.551859 0 120 0H42.896282C21.448141 0 21.448141 36 0 36h77.103718Z" />
                </svg>
                <h3 class="z-20 whitespace-nowrap uppercase">
                    Nhóm sản phẩm Gạo Krông Ana </h3>
            </div>
        </div>

        <section class="products splide mt-2">
            <div class="splide__track">
                <div class="splide__list flex gap-2">
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="{{ route('web.products.show') }}">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154841344.jpg?x-oss-process=image/resize,m_pad,w_240,h_240)">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    OCOP - Gạo Nhật Minh - Đăk Lắk
                                </span>
                            </div>
                        </a>
                    </article>
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="#">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(https://vuagaovn.com/upload/1/products/l_1914010411_47c02766-04b7-4aa5-94be-1cab0f406ef8.png)">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    Gạo ST25 Krông Ana
                                </span>
                            </div>
                        </a>
                    </article>
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="#">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(https://vn-test-11.slatic.net/p/319deca0c3e88ac955c1c764f18af13d.jpg">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    Gạo sạch hữu cơ Krông Ana
                                </span>
                            </div>
                        </a>
                    </article>
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="#">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMVFRUXGBgaGBgYGBcYHhgfGBsaFxgYGRkYHyggGBolGxcVIjEiJSkrLi4uGB8zODMsNygtLisBCgoKDg0OGxAQGy8lICUvLS0tLS0tLS0tLy0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0vLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAFAQIDBAYAB//EAFEQAAIBAgQDBAQICQkGBQUAAAECEQADBBIhMQVBUQYTImEycYGRBxRCkqGxwdEVIzNSU2Jy0vAWF0NUgpOy0+EkY4OipMJklLPj8TVEVXSj/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EADwRAAEEAAQDBQcDAwMDBQAAAAEAAgMRBBIhMUFRYQUTcZGhFCIygbHR8FLB4SMzQhVi8TRy0iSCkqKy/9oADAMBAAIRAxEAPwD2KKqWlcBQklpoXUIS0JLqaFU4lxK1YXNdcKPPn6qrfIGmtzyH59UEhozONDmVj+I/CVZSQgB/aJ19gBI9oqP9U8h6n9h9Vjfj4R8Nn0+5+iD4j4T2GykA7fi9PYS46j30d24/5n5V9lU7tAj/AB+v3UuM7bvaVGuIQXAYKU1g7H8oOlUsZnJAedPD7K6XtCWJrS4DXhXDzSWfhDTZkj1gr9AzfXU+6ePhf5gH6UoDtivjb9R90e4V2zw9zw5shbTWNfbt7N/KjNIz4hpzGvpv5WtcWPw8xAuj1++30Ws4ewIMa1dGQ4WFdMKKtxVipXRQhIaRIG6E6KaVrooRaWKaSWKEJYoSUN67GgpEqbW3umfGIGvvpZlLu7OiaMcBvr6qWcKXcFNPEOi++jOmIOZVd77NuaiXEq0RtCZlpKVpQlFJZk7JRSVq1U1SuoQloQuppJaEJl+5lVm6An3Cai92RpdyTaLIC8X7TcSuNOIeHLlltg6hBqMwGxJEGfMA+jFZmNJdlPz6n826LkYqex3n/wAeg/NT1PRYy85YknUmtQAAoLmFxcbK2/ZXg4xNp7N4I9sqFt3UImy8SMwBkA5tyIMHmdefPL3bg5uh4jmF28LD3sZY7UcCOB5fn7rV8W4Gl26t+5b7zu7ShLQPpuwEayNBlPQazyrIyVzAWjSzv0W6WBsmRzheUHTrwXmHGi/eeNrZYaEWyCFymIkaGuvDVaeq85i82b3qvpwUeBxptnYMvylbUGpPYHKiOUsPTiF6r2MxbqzWWJKlQ9vfQGZXzAgQejAfJrKx1OHXQ+NXfkDa9NhHkgxnYajw5eA0rxpanF4hlUQx1dB7C6gj3E1pJIC3RxtJ1HA/Qq+2Ii2zc1BPuGlKeXu4XScgT5BZhHcgbzQjAYFLiG7eYySdSYiK87g8FDiYTiMU7Uk6k1Vfnh0W+ad8b+7iHog3G+07cPwWJxCr3otlRbDEgS7ZBPlBkgdOUzWnsN7yZIwbYDofP9taVWPAprqpx3WO4x8IPG8JhsPi71vAtaxSg2wq3JXMudMwzCDBBiTzGlehXNRvA9s+J4biGFwnEbeFZcVorWM4KEmBOYwYMAiOcg6QUNVIghOftNxzEviLmGw+HwuGssQpxguW2uAT4paAJAB2AGaJMGmooTiPhjvnhQxSWbYxPxgWGBzFB4Dc7xVmdRpBOh5mhCCfCLiOIhuGtiTh/jQxDm0bWbLB7gqHJ1nPMxpFRBCtc1wq16twY4lrKnF933+ucWs2QanKFzGfRifOapO62M0bqiCpRSC5SLbp0olyeLdOlDMni3TpLMor+IRBLMNOW59w1qJcBupsje800Kn+GrfR/cPvqHetV/scnRF6uWFdTQlihC6hCWhJMvWsysvUEe8RUXsztLeabXUQV4v2wtCypsOpkHwSDAg7o3PwmCp25aATniDi7N5+P55rj40CJvdkeHhzB8NxwKlTshYupYe0XVcRaQIzOCBfNzIyEBNVAVz18NalU3DscARxHqqXDuyd8XbaW8SLfe2Q+ZRc0DP3WRso/O5kxp10pOaHbhSjhew+66rHBTcI4fdNvEm/evubV9cN3aXxbzO75XJe4CAumkxJ00qPds3oK1hko5nHetCoLnYe9luMhgrdKC04hoN0WVJYeAtJWcpIHXlU6WV2ENEjyUGP4F8Va3cd0vW+8uW3jMMr2jDqQRJHMHY8xUXg1ooGERuDnai6K9E7GYQsTiDmgqAhIyyNyQsAgaxLEkxOxFY423JX6d/GqA8iT00XewgsGTnoPDe/+d1psbaJUQJ8ds+wOpJ901qcNFuidRN8j9CprqEoyj5Ske8VXiIzJC9g4gj0UGkB4J4FB8AMOAe+zZgfR1j6PtryuEGBYCMXeYHY3Xp+66E3fuP9KqPFZr4XsQX4LePdhE7yzljn4xJ+qvRdlzmaMkRhjeFcVzcXGGOrNZ4rO/CiR+BuDerD/wDoCumsiI/Ca8cX4Qw18ceU500n2j31AHRXOabCxuA4thLzYh+PXsS+IRzlwx70IABsq29FMyIlREHWZpm+CiA3/JAr+BuW+DW3dSi3cbmSdJUWiMw/VmQPVRxRXufNei/DM3d3OG3mkW7d4lmgmNbbcucK2nlUGcVdMdivSeC8Ss4q0t+w+e085WhlnKSp0YAjUEbUqU89iwiSpTpRJVbGY5Leh1boPt6VBzw1WxQPk225qj+Gm5IB7Sar708lp9ib+pVr/ELrneOgGlRMjirmYeJo2vxVXJ11qFK/NyTu6PQfRTpLMFr62rgpaEl0UISxQhKBTSSxQkh/GODWcShW8gYdeY9tVujBN7Hn+bocA9uVwscj+afJYnGdirqqiYbFvbS3c7y2hAYI3UTrzO7Eamq80g5H0+/1Vbuz20AxxFa1v9kPxHAOMzK4u22kagKYzZxAVGAhhI6cop98eLT6fdVHAz3o8fnyVLDdleMJcuXFvWQ90g3CTIYg5gxU2yuYHUGJB2o77/afRQGBmBJzDX85IzhuzXFHRkvYxQH3IXMwBJZgrSIBYzqNCBEayu9edmn5kD6X9FYMHJVOf+eiPYbsmhKvibj4hkkr3mXKCdWbIoCliQJYgnQa0iyR/wATqHT7/YBXNwsYNu949ft97R4Mo0kCpta1gyt0C104i0/vV61Owo5Xcly3160WEFjlL3iDeD7AaRawmyLUMrzskuYtSIKgjoYNSzpdweap4jxgAqpA2EDSokkq9rGtUbWQYkAwZEgGD1HQ1FTJTbuBtsZe2jHqyqT7yKaiVO1lToQCPMA0JFOuYdWGVlDDowBHuNNRJUliwqgKqhQNgAAB7BTUCVBxPGd2pA9I/RPOovdlCuw8PeO12WfyySTqTqazVe66tgCgpAk06UM1J+QU6UbKaVpKVrstFIsLWRWxcO0sU0JYoSSgUISxQkuihCZf9E0HZSZ8SF8Y4pZwiB7urH0VG5qp72xiyteGw8uKflZtzQAdv4gvhmFs7N19U6e4mqfa+bdF0T2JejZBm5LW4bE23tC8volcwnTlPOtILSMwXHfHIyTujvdIFwHtfbxN7uu7yyCQTGsfVVMWID3VS34vst+Hi7zNav8AH+L2MIJuSzH0V0+rb2mpyyNj3WfB4WbFGmaDiUCt9u1kd7hmRG2aN/PUfVNU+1D/ACboug7sZ1Hu5LI4fn70tLbsLcVXtEFGEjXrV+UEW1csyOjJbJuEM472gtYMrbCG5dPIee3v8qhJK2PSrK1YTAyYsF5NNCpYftqGDzhnFxBOXKT7Npn1xUBibv3dVe/sgtIqQZTxUJ7eQcpwrBjsI1Ps3pe1cMqs/wBFsX3gpXT2wtrY725ZKtmyqhEE6TOvKpe0ANzEKgdlPdL3bH2KslM4Z2xW5dW1esG0W9Eke7cA0MxIcacKTn7JdHGZIn5q3TuMdr1sXmsiyXK9KJMQGuy0lhuyjNEJC+rV3s5x742XU2jbygHXnPSpxS95eioxuC9lDSHXaJqlWUspKcxygk8gT7qNlEe8aCzF64XbM1ZSbNldhjRGMrU5VmhBNJ4EU1C7SETQndLiulCL1UOakrKWuiti4SWKEJYoStLFCF0U0ksUIUV7cdKid1NuxWE7XANxOwt38nCxO06yPeErHNrML2Xf7PJbgXlnxa/n1RPtVxG5bbukwgvWyoJPLrGxmrJnkGg2wsuAgY9ud0mVyF43tW13h9xigtlm7tADMgjxGYHn7qrdOXRHhwWqLs5seLaAboWVmMNjrVp8Nctnxp+U0I5yfWYZh/ZWs4cGlpHzXVfG+RsjH7Hb8+QPmtJxF1ucWtd7GQhSs7bMR9M+4Ve6nTi1zYQ6Ps92TfW/Ra7tVh7Jwt3OFAykgwNxtHnWqYNyG1xsBJKMQ3KeKGfBo7HCa7Bjl9+v0zVeEvItXbYHtGnJRdrOz91764jDuougeiY1idveffypTREuzN3U+z8bG2Iwyj3eai7P9pH78YfFWQlxtAYiY11HsOsnY9IpRTHNleNVPF4Fvdd9A+2hU+NgDjFoRplGn9m5UJP74V2FJ/013j+4Wt4zw7DEC5eCgJqCYEc59elapGMOruC4+GnnByRHdY5XPEcajW1y2bJHijeCD9i6dPWBWT+9ICNgu1QwGFcHm3O4J2J4Reu426bN+2O83jxEARpB21A5imY3OkOU7oZioo8KwSMOivdieI3Rfu4W8QxTZgB9nLap4d7sxY5Z+1IIzC2ePS+CO4niqLIWWbUeQI6+2rXSALBHhXu1OgQ3E8Qe4IIAEzp6tqqdIXBa48OyM2oEQzUQFaXKcpFSqlUDaRVoTJTwtOkrUd4UipMVeoK1azvRWy1w8pXC75UWjKnq807SIpOBFNRTqEl1CFDiGGmtRKsYChHaDgVvHIJOV09Fhy+8fx0NVyRiULZhcW/CO5g8Fn/5G41h3b4sm3sd9R03+uap9nkOhdot/wDqeGb77Y9Vb4j2KLdxbtsos2jLAyS5kEk/83zjUnYa6A2Cqh7VDc7nD3j6J+PwmGxqXsPYyrdtlZbLEGfp2O3nQ5rJAWt3CUUs+Fc2WXVp6pcV2MN3D20uOBetCFuLOoG00zh8zQCdQkztQRzOc0e67cKgOxOKuQt/FFrY5CdY9Z39c1D2Z50c7RaP9Vw8dujj1W34bgUs21toIVRArWxoaKC4c0zpXl7tys72o7L3b9wXbWIZGAgDkPVER/oKolgc42Cujgu0I4Wd29lhV+B9j7i31xGJvd4y+iPo18tTp51GPDkOzONqzE9psdEYoW0CrXEezdy5j0xQdQqgDLrJ0YTP9r6Kk6EmQPVUOPYzCGAg2f4+ym7ZcBuYtUVHCAGTM69NB7/ZTniMgACh2djGYYkuF2gWC7GYy2VAxIyKQcozAETJG/PX31U3DyDit8namGfds1PFWuM9jLjXu/w93u2I8W/QDQ9NBUn4c5szSqsN2qwR93M2xwVvs/wD4kty9cbvLrbn17fSdTTji7oFx1KqxWM9sc2JgpoVUJJk771XS03QpT2rU0wFW51KbLGlSpV3abFCdp4Smo2ms1JMBQ3KiVa1MpKS0lalyF1CEtCSUU0Ka0dKYVbt1Bj+IJatPdaSqAkx5CTFJzw0EqcULpHhg3KGYTjWGu4dsVBFsZtWkTEg6esGqw9jm51qfh5o5RCDqVVtdtMOLBvC24tBss5dz5df9D0qIxDct1orHdmymTIXC1DY+EbBswBLL5lTA9fT20DFsUndjzgWKR/inGLVmz3rOoUjwk858hqfUKtfIGtu1hhwz5JMgHivOuD9p0t4g3DiZzls4NnKpn0crAlh62EeresTJQHXfovQT4MyRZMm22uvXp5Lf8X7Q2cPaW8xLIxABXXfatj5WtGZcKDBySvMY0I5p+A45avYf4wmqgEkcxHI02yBzcwUZMK+OXunbqPgvaOziLT3VlUQwS2nKaTJWvFqeIwUkLww6k8kGxHwj4RWyjOw6gafTv7Jqo4tlrW3saciyQFoeDcZs4lM9lswGh5EHoQdRV7JGvFhYMRhpIHZXhEDU1nWdwfbHD3MR8XXNnzMsxpKzOvsNUNxDS7KuhJ2bKyLvTturPaHtJawmXvQ3imIE7VKSUR7qvC4J+IvKdlLiOOWlw3xn0rcA6dDTMgDM3BRbhHum7nYp/DOJ28TY70A5DOjDpvpQ14e2+CU0D4Jcl6oJwnj2DxN02UQhoOuoGhjQ+0VSySN5ygLbPhsTAzvHHRWLlvKSOYkUEUkHZgCmxQpWukChFEpjvrStSDaTYpJpjChStNiki1pIrUuUkkdaSNUjOAJkUWEwCVXfF9B76jmVoi5qFrhO5qNkqYaBsqvaL/6fif2H/w0pP7TlPD/APVMXltjHO9nD4VibVlnJLmYbxmSNI8JMcxMTFYQ4kBvBd8sa17pRq6tvl+63XwgYNLPDkt2wAqskR7Na14hobEAFyOzpHSYpznbrKY7jCX8NawlvCnvstsByACcoElfIgHXTSs7nhzQwDVdJkLo5XSuf7uuiu8TwTfGcDg758C20kSYmDP+EefiNSc05mscq4pR3Uk0e5JW+4z2dwzYdkNtVAU5SABlgaFehrY+JhbVLiYfGTCUG7teXW8WzcKZSZCXwF8tFMe9jWAOJi+a9EWAYqxxCt8Gxr4J2s3D+Jv2wysdBLLIPlr4T6gdt5McYzR2KrmjbiAHt+Jp/Pv/ACqSYpk4WQsw9+G9QTNHvA99QsiL5q3K12Ks8G/utzeXDYLB2j8X74Po2UAlpHpGdwa1nJGwaWuQDNiZ3DPlpd2G49h2f4tYw72tGYlgBzG8EmdR7KIJG3lApLtHDSZe9e++C0nafiIsYa7d6KY8ydAPadKvldlYSufg4u9ma1eM2LqWks4hbgN4XSzrOsTpI5ei2v8AvBXMBAAdxXrHW8ujI92tPz82Wv8AhMvi6mEYHR+Y841FacScwaVzOymmMyNPBBEx74ezisDdOmUm2TMHnp5MDI9o3qnMWtcwrWY2yyMnb8/zotBgeJdxwXMDDNmVfWxgH2TNXB+WBYpIu97Q12FFZPh+It4Z8JeS4CwJ70A+jJ5jlCNHrWs7SGFrgunKHTNkY4acPzx+q9Z4lEq/JxP8eyK3v5rzcF0W8kPZ6rtaQEyKSlsnBaaRKUihATIpJ2uimi0TAqxZE1jFCYFqMmaSmBS4ChK04ChJN4rg2vYO/aSC7qyiTGpECfKm5pdGQFGORseIa92wWfwXYhn4d8XvBVvKWKMNYJZmHSRBgj1+uqm4cmPKd1rf2i1uIzsNtO6qX+z/ABC5gfitxUZlYFGz/JHJtJker/WJjkLMpVrcVhWz960776KzxzshffD4RrWVcTYVFOunhHXnBAj29ab4HFra3ChDj4xLIHfCTYV/tH2XuYyzauE91irYGoMidNJ33Ag76T5GckJkaDsVTh8azDvc0asKC3uDcYvL3Fy4gt7MwO425AT6tKrMc7hlK1DEYGM940aohxvsYwwCYbDgMwcMxYxJ5k6VN8BEeVqog7QaZzJJoKoJ/aHs+t7B2rJe2uJtqMoLAEnmvWD9x5RRJEHMA4p4fEuZM54BLDxpM7PdjX+JXcNiQFLPmUqZjQQZjqKI4DkLXIxHaDRM2SPWt1Qs8F4vYXubb23tjRS3yR7QY9WtQEczdArjicFIc7tCjvZXgPxMvexN0Nfu7np5D+Om0VbFH3fvOOpWTF4k4mo4h7oTu33C8Ri7SWrGXKWDOxMaco66wfZRiGOeAGqPZ00UDi6TdR8S7C4c4dlt2lF7J4W/Wjf30Ow7cug1Uou05O9BcfdtAcX2UxtzD4a0VTNZYz4tMs+GNOQgVSYZC0DktrMdh2yPcD8SM9uOyTYpLb2gBeUAGTGYcwT5fxvVs8BeARusmBx7YnOa8+6UIv8AZLFvh8LhyqhLblrni6n5OmvhLb+VVGF5aGrU3HYdsj5L1I0RjtD2FsNh2GHtIt3SDtsdR6jt7atkwzS33RqsuG7TkEg7w+6iOBw11cFbS+ALiQNDMxpM+Y1qQaRGA7dVOew4kuj2KgAqCvTgKajadFCEw0k0lCaWhJXmfpVlrOGqOkpKpxjENbsXHWMyrInWoPJa0kK/DMEkrWO2JWHPa/FdU+YKyd+9ds9mQdfNRt2zxf5yfMFPv3qJ7Ng5HzUmB7XY13yrdspoSWcKigDUkn7pNSbNIToVRNgcO1tlpPQalVrnb/HT+UQxzyfTrS9ok5pf6bh/0+qib4RMf+kT5gp+0Sc1A9nYfl6q5gO13FLys63sOoUx48ikwJbKu7QNTA9UnSptllcLsLPJhcMwgFp+SHY34RscrsEv27igwr90FzeYUmQDynX1bUjiHXoVJuCirVtdLVd/hP4iNO8t/wB2KPaHqJwMPL1XoHZLimKxOBTENe8buyZFRADDlRruNBvUcVNKyDNH8RIA8SspZE2bIW6AXdnkrVnhituyOM0MNTmJExPMnxanmN9a83FhDI8PMgdrR1OpqwAdN9eQsVa1vxLm7AjTTp/xp8lGcNC3e9xbW7VorlnKwgzAGaSTpoPOK7+Ce5zHNld8Jq+Y3B8lFzyXNMUYLnb8/wA5+ak+MhcOMR+EL4tFsoPdKTIJERlncGtuYBmbMaVRikdOYe6bm33/AJpVuG3bOJuFbeOuMwUsc1pRoIBMsvmKTCyQ0HKydmIwzA58YAutDx+RTMLxmyXFpeJXRrAPdKFn9rLEee1DZGXlDiiTCYjL3joR56+VrQDgV4HN8cuA9cluffFXd0d7XOOKBFZBXzQJePWjc7v8J3N4zd0mSf28sR57edVd6y6zLacFNkz9yPC9fK/5Vzjd74pBvcQuKX2AtIzGNzAG2u9SeRHu5UYdj8RoyMaeSk4XcOItm7a4i5RfSm3bXLAk5gRpprUmEPFhyjMx0L8j4hfDjaE4Di9l73dpxK6GYwGNlVDHoGK9dp3qpr2F1By0y4fENjzOjFDrt8rRPi1hrTW1uY26zXHVFAtW2gsYBMDwjzqx4AqyVmhc5wcWMAoWeGyu/wAnLv8AW3/urX3VLuuqr9rP6R6rv5O3v64/91a+6n3XVL2o/pHqh2Ad/wAarvnKXXQNAWQsRIGk61UdDS1sOYAqyDSU11CS6aEK7FTVFpYppWhvaUf7Le/YP2VXL8BWvA/9QzxWaweLOEwCX7IXvr11la4QGKBc0KJ2nLPv8qoa7u4g5u5K6M0YxWMdFITlaAa53Wvqi+CwuJuYrC37z4S4Lbshey0sxZGPihQNBGmnWNata17ntc6tOXgsEskDIJI4w8WAadsKI21SdjMI1v4xfFo3DdxRt6R4ba3GDvryBLSP1RTgaRbq3PooY+QPyRk1lZfzrQfnNee8ZwK4XGvbdc1u3dBy/nJIcD2oQKyPbkfR4H0XWikM0AcDqR67fVbLjWJu463cGExNm7hjkz2e7VLuHUEBmUMNYhjPza1uJkHuEVy5LkxMZh3DvWEO1o3Ycfz+UL7Vdqr/AA/EthcKlu1YshBkKA97Khizk6mSSJBnQ6zUZJDG7K3ZWYfCsxEYkkJLj121RntBg7XD7N/iGHsoL9zugFYAjDm5GYhfkkk++OWlWvAYC8DVZInunc2F50F/Ol5h2i7T4jGhBiCjG3MMEVWOb84j1aAQKyPkLwLXRjw7IrycV658FFjPwq2Jg95dIPQi4xBrQYe9gyg0dweRGoXKxT8mIJ6D6Ire4ZiCcoVFX9UgA6zJ515+Xs7HOdka1ob/ALaA8Tx+3BaWYmADMSSeu/2Vu/wO0LEOiuyBnBI2bKRI9n313MJgWYeDJudyeqztxspmtpoGh8rWTwdgPwzCjvrdki+WU3NmIZ4X6Z84oaLhbrWvH5rryvLMfKchcMtGtwKGquuuJF98Dcvrd7/DvlfIqFCQw1y/J0PvFWe/mMZN2FmBgMTcUxhbkcLFk3tz4oNxJrrWbHDWwot3cwh5BkAmXEddSTPI+yl2YtERbRW2ERiV+NbJbeX7fb5LfdoCRhL6oZcWXjr6JE1uk+A1yXnsLRxDC7bMPqslfSz+Ah6Pog/8TPr7ZkeryrMQ32b83XVBl/1T5+lJ3BJPEsP33pfErZTN+dlGaJ+V+U+mhn90Zv0qOIoYR/d7d4b8PykN4xIu8WFn0O7t5o2nMuf6Ddn21B+8lK+DVmGMm9mv2/ZXe1iWhwfDlIkCz3Ub5iPFHn6c+dTmruBXSlRgy849+b/dfh+UidzsxebEC7lsEG/avG42bvQFChrQ0jKIMa+znVncnNem93xWYYyMRZLPwltf468fwLZVpXLXUIWKw3p4j/8AYufZWV25XWh+AeCsioqwpaaS6hCJZasWS0sUUi1Q47hmuYe6iCWZYA0E++oSNJaQFowkjWTNc7YFZThOEx9hWt/Fku2mMtbuG2yz1Hi0Og91Z42ytFVY5FdbEy4OZwf3ha4cRYP0UzniIuWnTCW0SySyWkyKkspQkw0kwxqX9WwQ3QcFRWDyOaZCS7QuN3vfLoqPF8HxO8ttRYa0qZ4Fu4FkuczM3j1M/WaTxK6tKUon4OMk5rJrccvkq3GeEcSxF1LzYQZ0VFOtsh8hkMysxBJnUbGk9sriCWpRTYWJhY1+hJ56Xy0V3H43iTJcVcBYtXbi5Ll1BbDsp3E59PaTUnPk2y0eapZBhwQe8JA1AN19EzD4rieVO94fYxFy2It3botl1jaTn1jrofbrTD5K1bai+GCzleWg7gXSzSdqMbYxN9roW6bhy37V0BkOXQCAYWBoI06zSD5QSSN1N0EDmAN0rYjdC+0nGWxXdqMNh7CW5yrZQL6W8nmPIQKT8z+FJxRiOzmJJ5rb/B/23w+DwSWLq3S6tcJyqpHicsNSw5Gr45MraIKyYjCOlfnDgPG/stlgO3Fq8pe1YxDKDE5bQ13jW4J3FW97pdH0+6ynBEOyl7b/APd/4p93tUjKVOFxUGQdLXPT9JSMl8D6fdDcKWm8406O/wDFC0v4Y4f4r8TxbWwSRPdSCSTIbvdDqffVeVmTJlNfL7rWZZ+/M/eNDuOjq/8AyhfDu0vDsDdcdzihdHhYuLbEDQwIeI228qTAyM6NN/L7qeIdiMWwAvbl6WP2TrXbrhy4hsT3eKa6wyyQhCjTRRn02+k9TTDm589G/wA6qDoZzCIczco146+Oi5O3XDRiWxXdYrvHTIdEiNOWf9Ue710Zm589G/zqkYZzCIczcoN8d/JVuG4jhl64WtYXGOFIY2pt5ATMHK1waaHSY5bVXkiu6Phw+q0mbGZaztva9b86RzjuKsYrL3mDxgZPRdDYVhPKe929dTkcx+4P581mwzZ4LyObR3Bsj6J3CcZYw9prVvAYoq8583cMXkQcxN7URy21PWmxzGCg0+n3SnZPM8Pc8WNqsV4aIbg8DhLdxbgwOObIcyIzWGRTvIBva69Sara2MG6P581fJNinsLS5uu5ANn0Wm/lX/wCDxf8A0/8AnVo74cj6fdc72J36h6/Zd/Ks/wBSxf8A0/8AnUd8OR9Pul7G79Q9fskPa3/wWL/6f/Oo74cj6fdP2J36h6/ZDOHuT3rsjW89244V8uYAxE5GI5daqJs2tbGFoAVgNSVlJxNCS7PQikZir1htdFCF0UISxQklAoStOC0JEqpjMZHhBHmfsFRc7gFdHF/k5VLZX85feKgArnOUN3iaAQhBOusjT76ReBsrG4dxNuXjvH3JxN8kyTcf66LWgAAUFQoTXUIW27B8atohsXGCHMWQsYDZgJEnQGRz61YKc2limDo5O8AsbFbD8JWh8pfnp+9S7oqv2pvIrrvFbKqS1xFHUuv2GTTEdbpHEZtGg2vKe0OPF/EXLqjwsQFneFAUE+uJqLjZta4IzHGGlDqirktCa2XwbHxX/Vb+t6RUHLchx1FJQSq46imkU+hCdNNRXF6EUoy3WkpUkJpJpM1CdJymmorp/iKEI/FXrm2uihO10UJWly0ItKBTStMxT5V8zoKTjQUoxmcsN8I1v/Yv+In21VWi3Rut68sgUlqtdFCF6l2X7D4TEYWzeYNmdfFDECRofpBqVBcyXESteQCin82uC6P89vvp0FX7VLzSfza4Lo/z2ooI9ql5+gXfzaYLo/z2ooJ+1S8/QJP5s8F0f5xooI9ql5/RJ/Nlguj/ADjRQR7VLz+iX+bTB/7z55ooI9ql5+gTV+DfBHYuf7ZpaJe1ynj6BKfg0wf+8+eadBP2uXn6BY74Q+zNjB9x3WaX7zMGM6Llj6zSK1YaV8l5ljYqK12uihO16B2Gx9u3hsrNB7xtIY8l6CnRKzSysaaJWg/DNr9Y/wBhvtFGUqo4hihbjSk6JcPsA+s0ZCj2lg4FQvxnTS0x23Kjf2mjIl7WOSavG25Wh7X8vJaMiicV09f4UZ4zc/MTy8TfdTyBI4p3IKJ+M3+Xdj+yx/7qYYFE4l6b+GMR+db+Yf36eQKPtD1treJYc/fUQ4rQ6Np4KwmM6j3VLMqTDyKspcB51IEKotIUmWpKNrjA3oStCeI8StK3iddNhIqtxWmFuixnb3H99h8lvxeNTC+I6A6mKrsngtUYjbrmBPivPfidz9Hc+Y33U6Kuzs5jzXfE7n6O58xvuopHeN5jzXsfwZ2yuBtSCCTdkEEbXGgwfI1IbLmYogykjp9FocfiGUgLA0ZiTGyx1IHyhzFYsXM9hDWaaE30FcyBx5jmlDG1ws9B5+fJSYG+XUk8mIkbGOYqzCzGVhJ4EjyUZmZDpytYz4Q+0OItfisNIOglRLEtoAuh68tdRVrjbg1Y8RI5jfd3WI4FjTdzDE4u+l4nKqkXCfEQZC5fSADAevy1pma6/daD5KqBwcPfcQfmk4H2pxlvEZVu3GXMRluSR7cwB5HofVVpblbY0KzMnkbJVkjr/K9ot4rMlsnw51zGeQjMfpIFSD7AXTJpR3eLKCQFdiN8omPL11kfj2Bxa0F1b0FpbhnFuYkC+anweMFxcwBAMxMcvVz8jWiCdszczVS9rmOyuGq8x+FqyzXrBCs34tpgE/Kjl5AVaVuwbgGmysJ8Vufo3+a33UqWzO3mPNd8Vufo3+a33UUnnbzHmtb2YskWNQQc50IjkOtSGy52KIL9OSM5KazJEt/X9gpITMug9lMISFfr+w0ISZaaFDeXWmEKKTTQjN7iN7k5H9lPtWoUrO+eUpxl0/0jfQOXkKdKJkdzUTYi4f6R9vz2++lSWc80xrjfKZm15knl5mpKKi7kRsNugpJp5X7KEIjwFst9JEjxA+4/dSSK3GRYmBSJpKk22UO2U1BsjXfCbTLCNwliCI8/sqaikv4cPEzptBg+8VVLC2UC705Gj57qxkhZsnWbYUQNh/8AJJqUcYjaGtUXuLjZQHjPDcJjO7bvUzlvxbK6mWt+LwwdSoE6cvKpEWqjkeADRWeu9mWdDcXiQNpYBYHD5VjYFsh08UQTsfOnbufp/KhkjIu9PEfZT/gmxkK3cdbulFzjM9lQhI/FuQgWZLAiRB91QcC4UT5afnmlUfPz4K9jOIvcOaAuXwFVuKchmSHKkwTl28hXMxckgaXO93g0fufTl1W1mV0jWMAdzPLp+fJFOBXWy5QATqzNMgTt5sTvy9nOfZrgGlg4ak+KnisxId8h4BElslZIy66kARPmNd63sjDCSOOpWdznEC9aTlAygkD+DVlpJRaHNVo1QlNpeg91CFhu1OKPfkLaYhQokDfTNP00KYQo37vKy3vX96jVFhNS7e52o9q+X61FFFqF8RegDuxy5j76AnomC9eJEIBJ/OHPTpTpCmNq/wDqD2+r9WklYTDhL5OpT3n7BTFotd8RufnL72++iii0a/BeIP8ARKN93H2VPI5RzNTvwPiOlsf2m+wU8jks7UqcCxB52eX5/LXp50ZCjOEt7gN5VLG4gABOik/XFRcMoJJ2SMgAtUfix2707crS/vVm9qj6+Sp9qZyS/EhOt257FUf91QOKj5FHtbeSI8Dwii/bIe4YJOpWNjuAPPrUmYhr3ZQCmzEZ3ZaWxdM1sgGCVIB6SKnMwvjc0GiQRa0sOVwJVbB2Gz5iMoCkR64+gQem+3XHh4niXMRlAFV416CtNvAcb5XtLKBvVXG9Ie37K6CzKShCo8Vxtm2oW80C7KAQxLEj0RlBMmdBz5UKD3NGhWSuWMGMpOJxL5DpKkFVmHYA2x+Ki0QzDSA0ammsxDOZ/P20VzCX8Ebb2VxD3DcKAnu87DJNtPCLWUZe4OpGkAyJU0KQMZBF/nl0T+LYWxaD23xN1S2HTOxOZmt4YXCxY5DJbO082AaBoaiSeCbmsbuTsPIITcKz4LiFbhd8qnQm0CXyKttUGjZi27ZRvlrnY1sr4iSAK13v9lpw+Rs7Qw2DfT+PFH+A4e4UBLIOewkkHccwOVZ8DFIWEsIaD01Pz+y2YgsD6dqfQI1hcQWlWXKy7jkfMHmK6cMjnW14ojy8Qsz2Aag2CqfEccLeQROrMRpykLMkaZivupYicR9eP58yoZC6ta14qLDE3gXN5kEkAAgeonzNYoQ/E3IXkDYAafMrU9zIQG5QeZKu4OQuVmk67k+L9YTr7K3YcPDaebI48+qzPLM3ubHggHGAO9cnYKCfUFFPEz9zHmAsnQKUUed1IbYuhlJyMkRo2XWdoyk+6qRPNHK1kgHvcuCsMTC0lvBXDhFlh3lsMglxPoCM0nTprXSyrLmVRsBmZCrIy3JysDp4d5mlkTzKO1g0dc9q4twK6qYDLqSAIncajUUZOSM3NX8PYt9+bJbOwUlhlYBT4Cvi2JIbYVINFpElDrTq2qnMvJspWdBJAbUCZHsqCkpMlCFpnz5hEZdZ6+UfTVjs96KLcla7p6hp12jbznf3U25v8kjlrTdS2Bv6/sA+ymUgoOLaWX9g95AqjEGoneCrm0YUAsIPb7o1H+tcuHKB1WJtJxsqI8J/5vPb6KmWRg7H1T91T8GX8esbS31Glh673TqrMP8A3Fq7Owreuin0IVe3mnxRu0R00y+2KEhfFWKEIPxVLV1kW4qsQSUGZswOWcwC+iQNQSQZAjWgghVnu3kAnXh+cFFY7O4RlJFsqGktld1zZwS2bKROYPBneB0FBNCyotiYRshXEsBw2yWLIBoMwVnzNlzbw0AQxmd9PzRWM42OrF+C0Q9nmYktGg3N6KlxvEYe82Y25LeFiWYAKAy7o+mly6P7RrKe0H37oC0O7MZvIfK0OOKsoRdS3bALOR4roGYOxgLmgAm48gAiD7KPa5icpA8uHmmMHhwO9YTQ+t/8q9wXtTlxLWHt3O7ULlcKuUkjNLsTIMkAa7RprWjBNrDCRztf08d/VZcWXslJIOXpsPE/nqt2sMQxUggGCY2I1GhPl7q1ABxDiNQgPNVzWe7S3wGRSAZXwzB1zNm03iADqY0A56ZO0SO6OuunlacVd8zMOOnjSfwHECM2Uk+SaKCfEZG071jwMuUuJs7DQE1XX52aWueO62+5PRaAsHWQZB1B+2uyx4e3M3ZY3No0VmeMuBdYtABUCTtqq79BWTtCN74gW8Dauw7gHaoGbmqd5dV2zIRbtwFEEEsQNYG8sY0HOKrw2UygxtJ5uden7K2S8pvRF72KtZ8Q3eJldCFbMsMciiAZgnfSuxzWAcFXa9hithL5QhWfMrQYmSpdfzPM6SRQKIFo11TU4kEQrcv2brs9vIlnLltqGBZvCPCsSfEeQ11p3W6K5KzZxtoYl7ude7JjOCCvoIPS23EeukD7yZ2VC0F9FXV40lCGHvFRpSUkUIWhs4vOJS2zfMH1tNSEhOwUMo5pTcu/oT85PvpZ38vX+E8o5q3hwQuog6mPWSQJ91SBPFJR8SsF0KjeR9FVzML2FoVcrS5tBDRw+4IARD5mJrM3DOaK08lR3B6Jfil39Hb+j7qn3L+ifcu6KXhWAdLgZgoGuxnceqq4sM6NxcSpwwljrKOWthVy1qrxi3ns3LYYozoyqwBJUkEBvDrpvQoPBc0gJvDLRREUtnIzSx3bXdp+UefKZiBpQm1paKKv0JqniMJbYgtGggTBiNdJ9dBKgWt4gLNYjiveFyCVUZ1UjmJ9OJ1MARyGlczFue53TTT89VCNzJWZ2mqNH7/OvksxwPDsbt0XLyXLcgo7FVdubSBHh9H31mx4Ia1zGG+NbdOdH0XabL3DO7e4BulfuP8AnXjqi2Pw2RfC0vqCBBLE6DcQsk6+s8t8UILjbhV+iRxbbc4agVt6DwVXG2jlcP3cDxZGgfJIYp1Pi5ZSeQq9jaNt3V8ZtoMux6XXif4RTsI2bvblxAFB0JYGSBDMViNJjyg+zp4cMaB4LLiQS0Nu7J0rrtvz6BbZUAEDatwAA0XPqllu1d4hrE3GRAWLAKSGkwQxDARkFwahtXBjQGs+InYz3HcR/Cm2CR5D2HZJ2e49ZFw4bvFV1GZgzIs5pI03JiCTOk1T2ewtgzgU2zqni5f61O/PBaG1bUFihXK2pAj0uunUb+oedaY2Na4uZVHeufP7pGTM0Xw+i8+7edqxhb+TuGeQJLE210VD4WKkXPS1jaK2MZYVRNKPgOPuXdThRZB38ckebLkEeqZ8qbm0gG0be0NNBUE1UxCDNtyH20JqFbQHIUIV02xtQhIqRtQhLFNCxK/CVeG1sCBP5cbQNfR9XvqeUooJy/CdeMRbmdovqZ328PkfdSopUE5vhMvj+ib+9H7lABToKFPhMvnUWmPWL08o/R0FpT0Tl+Eq+BAsuNz+V6mT/R+ZpUUUFy/CRfAAFpwAOV3aOWtqpBpS0Rvsp26u38XYssjRcZgfxkxlRmkjuxoSI3moOaaRovUbOwqpNQY7C94pWSAd9SJ8tKdmqVb2B26dYtZcq7xP2UlMChSTF4tEkuwVRuT9A9Z6eRqN2aCi97WC3FYbF8WN7EWjdJVWLLaQAfKBSTHiBgjlE7VIOAPuakbjrXlVriSSOkmYZra03l0Hh438q5LH8W7Qd1fC20Vu8BtoHkKEWZLaiSzSdxEeyq2Yb3bk4a6c/wCBS29n5XveGDQjLR5a/vafh+JDK/fNhpBm2lt1JDrK6KmyMvXXaRpUCzWmE0dCen8Lruw7TE6N4Y0DavW99+forvC7zq4SR4gjBZmCGBg/mmM30edU4lkZAe3YE69DxXGwsbo3Pj4OrLytvC/D9k3jYe6jraMsVV1U675ldZ5xlzRG46VjbGI3jNtZBPkQfVegw+KbKGg3qGuA8LBA66c+qMfB7xG2IR5CjNqQVRWZpALNoxmR0mOoroFoa4FzgfDpxKpmxzpL90NFnW7Op9OvVelmtKzrH9srBuQmUsoTMcpII8TAx1EEz7K5mOsSNcOS6GDALC0mgdPRDuxeAs33uXGQyuQZ4KkkKNA4OaB4T6zvvNuGbTQ0k1vXzUcZGC2iOJ8aFUt8VgdSBvW0BYQs1xiwj3GDqrejowB+SOtWt2SKrpbAEAAAcgI+qmhOcbUIVLEDxez76SahK6UJq8wpqKa3KkhdTQsa/YZYJyNBAWQSeg/7f4mtFqoucpsL2GtIgunOMivzBAAzEk6T8o0iLUcxQvivCQbfe21/FoGliVXoBuROumlQbzCnZG6x1vgN93NtLea4olkVkLAQDJAaQII94qxNEkwUZhkYlIzqIlQeswOYG+5FY3QSVYIWoTM2IS3OC3gTc7i5lfLl8Lc4GUwN2ldp3G9aI2uDWglZ3vaXGkd7A8If8I4ZxYe0tt2LZwwzZrdwAqSNQCPpHWpvrIVAXYXuStCg1icaCtWY7UcdIDW7bAQv4y4NcgOkLBGvORt9RpWp14dfz1XMxuJdRbHtXvOGtXp08+CNcGfNbtsGzBgSD1BiPoqV3wpbYK7sEG+qyPGuKkrmY+AHOfpPtIAIFcuO5pyxzqFcNLJ2Fokl7rDd6GgknjrQG+n5SDG8xLXTAPdqLTDKYY5WMEjwkIdTyJHlXXw2FLfdJs8zyXCmxAlk7wDLoKrnxrlp5IPfw8JaXwkvmZ+8ZTkAYgZZEhTEzz+u6dscNvk8PwLVgYsRIA2A1xPIa8yh/DuB4a0xa5iDdYsSLVo5FnUakeJuY0iuTPjXv+BlDmdf4+q9RDgmj4zfRXsdifGyBBbtIFMKIJLTDzvnXKNG5H3Z4XOzBxNuJrXbw8CteIwzHRuYRQA3G/iOoRfgeOVzbW6PHm8LAgBhcBRj5ESSRzMxroemMKS/vIxpsQeFafnReWmkLAI5tSDma4cQ7ny69VSwYnOM2cAhc0luezZgABGXXoCNYMV4jDloFDr4eX54LHhXnM5xdqdPHhrfy66bECl6n2axneYdJILKoBgzI+SZ5ysVDDzB4y8Ruu0xvuA3YO1G1lfhEzkqtuC5tEoNpKv4gCdNVNUYsDO1x24/steGk3iJ+Lb5b+irfBzj0IFt2POdyMxYQrvETptJ299vdhpGaqP5qOX1RPjWvccraonU9enD8C9HubGtSyrOcSH41v7P+EVMbIVapJJWFCFUxC6/x51FCgIoTVx6kkkYUISUIQ3EY928Jtt4jJKWBIhZ5a/KgEayCOtQMQc3U+gV3eljtB6lc/Z57iEl7gYoYVrpQAxpIDE7kHb102QhmxUXzF41FK1Z7L/i0X43cTJnJyPmzTGaSw1grppprVxAc2lU11G0RbFYaz6dwlgN/ESwk6kIMu+bWOVFbJZ91Ws8Uw1zMbdgM3POFAb0hrGbN6LcutDg7YqOYAWFS4/xLDrkth8NZukkAPhXugEKjEK4EKAptwSp2A8qTrU2AEWi/ZrjOExGQ4Yg5fC3gKaxPNV5TyG+wpa5SgiirnH8c1sIFMGJ9uwInmNffXKx0jmNGU6/n0U4wHSgHbU+QWGa+Lh7uAVV1N0aajVmMESwAIHWT51rgwoBDw4kdee3y8NfRcLFYnvP6TmAUQdOW+x3046HzW47Luz4a2QwBm5GgMAOQqkDQQABA6b1fMwsdS6ODJdADfP6rLY10XPbcZSxKBSAfSJ94Ej2e6vNljo8SJBs03V8uB8Voa8vgMNa6jn8XLw+yJNwuyLYAQssyZWfaFyka+Y+yoz9qYtxvPX/AG6etjyB+Ssw3Z8DDQYCf921/dQX1sXEyslxlHLuwQI00GSsGeXNmvX/ALv5XYjjLP0hN4d2ewrz+LCn80iCNeZXLv8ARW3Dd7PJ3bTr1269Up8SYW5qFdPwqy3Z7ByHW0wMyGDZRIJ1gk6STv8AZWvEiGA93LI6+NDT/wCxWeLGTyjO0Cup19AVOuBw6Sot5gcpKiCPDoDDGF23A1qpuPhhFxOcTR30Gvhv0u65KuSCTEf3KA81DiuGWLhdivdM65STsdRGvWQOtW4btyS8swzDpusc/ZDHaxbqLsOHs3rlh9QJytuGB1VpO+oPtJrpRvjllzxHQt+hG/KgVlgilg/pvGl/UfvXnwU/azEKt+yHU7Aq2gE94fCSdgR7Ku9ndI4Padtx0KeJmDW5HA1uCOYWNsL4ri5i4VgJOad9M2ZZAgr4o5Heq8RhixoLRzJ5LnYeW3uJdZOlG9fG+G38r1PgmN73DoxYMwUBiOZjf20oJRI3qNCuy0e6Dd2N1Q4hZZrr5RrAj5o57Vra0kJEhDnv93bzXvC0mQDmEawM2VQW9g3HrNM07YygbWVQHH7Rj0hOoMac/dtWf2zTYqPeNSJxFLjQDr0JqbMUxxrZSDgVYNs5Z5TE1ovS1IK7dsEAeYB019f2bdZ2BplySZlJiBU6KLVn8Gv1T53+lSyFRzheYcXx4Fpc2IZQsjKFlnIS0pEEgFQyODOvjjankaQLCsJIJoqpa4j3i3QrMrNh8oJITwtcS0M+V4R99DqAZ0mDYyg3LSrdZdmtWzx6+i4ZiYRlVSZb0ne6vjC6RlKacyQNtaKNUNFG7NnVaTinEHVgiSydyBmAJ8WV5H6oEW5JHy/PQr3rUA0ISe0Vwk2hcRnSM0sdiDJDkaiAo6kg7RrBzSRQQ+Nrm1Sk7U3EN/vFtrcKXGHjYBQcqKGIBBI8Oo1+SNJJEjyU2aBGvg24yrIiKtpB3jr+KRUU+HMuiqATDCTA1EVFw9wp/wCS0Xae2VFt9WUTO0gRJjTUaTrzjrpwu0o8zBr4eKk1zmSBw13B8OKGcHS3dU3O7MvMZumUDQTBldTPWsEuKnjjELX0Gjhpxs6776WPopswrXSGV7bceevIDTqNaWo4Kg7pABAGbnPyusn666vZ7i7DtJ6/VWTtp9fQUslx3DxfVyJQ94Vk7MTDDz0BOvnvWbtCIROOXjR/nzI+ajg7lJHPMB9vIH5K73soBnBljJ11jQ/TNcZw6LoRnKQOX7KxgzrqfCB9XIazVuGgZI73zQVuIeWtsDVXmxCDQSfLT16ka12IRgsGQ8k2PC/T9zS5conlFBu/jXr9lSuYxYdcpPqkAHeR0Nc3tDHnFOvLpVDnvuevDkLWzB4EwNBzanU/wqPegCEYoTqTIPrJLan31z8pvULdl56qRrpUybknYSohddTpGutGSxskG5hoEvCrneYldAYA9msx7hXZ7IIZIWuO4IHj+DdZMdERG0jn6IvxVVzDwZmKQdYGXMTBMGRM6Vfj8W2CRpy26tDy+SyxQ96wgmgheLwVq5PeWwpZckoJ0/Z3jb3Vjw3bM8ZqT3m8jv5/e1GfsuGQWzQ/nyTOxSNZN2w5kAnKdpG6mPUWnzrsQSxzOdIzYgaeY+3yWOKCSD3Hba16em/z80vHUQX2YiTod20hJmAdB4atLGgGTktfelrcvBYHtA9+8zw6LoSNyMxlcvSYM9OtYmlpOZxJsrnuNnVUbpOfK7qByGacsFT0nNsPKPUKnQqwokJtpxOUSraasRvBy6ycpOhjTfyNIjTooredjcUlybNxQ2kiB6U7yBpGnPp79OGdYyHbgr4nWtb3VgAgiIBkZp0MTInyG4rVlbyV2qGY7iCWQGFhrzc1TugV9txwNugqxxo0k0WFR/ldd/8Ax1/32/3aVp5Qg+I7N2bg8XdaAgQqyAdNOajQbdAanZUdEPxfZm1hcNdZc1yQTEIzMRBCglTpKjcGInlRakBZWHGf8VmU3GQE3CTcUCGzZFMwAQqTAjxeQiQq0GyLpa/G4y1Yd3U5ibhW7IKBe7WMivrnfMbWmU5gIGooduoDZZq3gcKj20u95fvF0JXMSqG4VJlgo8WXKSJbbeDIVnZMBHsb2bxj32uqRAutcRTlgZokkg+IHKoKEQQPMihx1Q3ZbPszwpbV9AisFDE+IroWSBAAgCE5be2k8+4UAe8j3abCi5Zy7Eq0EAnxaQNN5GYR0NYJ2NdE7SyKPr/wk8W4Dgb8/wAtZzhOMU5gJkLrHIGAF00nVq8zJGW7/nVda23mbxo+HRa7ghBspG0NE+uK7uAH/px8/qsmI/uFZ3tAcNcDj4zYUknxLctllIJmASNOoNX5GyaSUDwPPU6HbbroqZIpmUYwdddttNx4oGt65atWwba3bQle8tlWDaiGIBkAmQR51yp8JTi6/D8+ngtPf5RQBzVRHrfz4+Oin+M/rK0bwRpqd+g299YMjgdiF02TQlmYEJLPFUk5XUwI8JmCJ09ZM034eQC3DzVLcfC85f5XDFMVlfEPI++eus6eVQyUadoVtbJG4ZmkJTiH7pnAJVdSREEiNBJk66aA9K1xYB8lEkNvazqR0FWsUmPbnyxtzkGtBp53SH2uLozDMLoOk+BjoOkAz5bVoh7Ot9SOAb80SYmdsdRx69SNPXX0W37Imy6s1piSujAqy5c2oHiUTsdRpvXTZDGx1xaDiBevIm9SR8lzpO9od8bPPTToKTe0hEqCNMup5jVttQa4/aw/qtPT91uwI901zQpsSqnwlpgT4i2nlM+dcvu7Gq2tYXCyr/ZoM9x31y5Rv6iPrNd3skFgeK0NflbkddtFzseGksAOov8ALQXt1xlluvZXwjKMxgiQQNSRJMTvGnvrZOS45QdOK5Mr6NLz7EBg2VuRJy/KYT6WwGXbxdaGtHBUaqN7zPOocAmYGh6Kp66r645bVMNrQIoqM4Zer2zHokhZ1HMyI8RiRy35BE9EKzwniTKQZjJpEQ2h2j0l6wAeR6VXIzWxujVpsLd8K7llFwelDMxYkkMVRDBbX0EUDyEVsikzMA4rYxwJRjiT5Vdp2Vjv0Bq9w99DfhSd/b/SJ85fvqulJNGGj5PXn5VeFUVTx2GZlICa9ZI8vkGdidjQE1j8ZwPFd6rLcciVDKxcqRpJ8Q09Xq1ooJ3oi2MS83gFvwXLjtcXIpU5TKOwObMZQcwTm5RoyohMw/ZxVdbndICHDyEuKZBBnS5v7PYdqASmapafDu4CggAAAaTyqBPFMBDuFYuOK21yHxJkDy8DwNcKxmyAEBdYkx5Vkw7i+IuPPT0VsgAdS0nafjC2O7Q2nuF1Y+EqIyx1988oNQkNEG1bFh+9ab6LLYO18Zu3RaS5h7hQsxUKcxVgJdc3pAncRPOqZ2RzG61HDX5jdLuJMMzQhwP4D/x5Fbjs1bdbFsXPTGbNAj5RgxJj1VfFEYmBh+t9d1Q12YX/AAs9Z7ERoyqdTqGjcgjQjybp6XlVAjk4j1XTOLbwPojvBuz6W7AtOoJliSD1JI156GtEIcwAncX1WHFFsriRxrpsq2O7GYe4ZI+j92KsplaNA8/usjoMx1cfT7J38mECBFW3AAAERtpy1qXevbC5razkb8Og4mvmSl7M3OP0jhx/5VP+RFpjLqnsE/YKpa+SgBGxlcfiPqAL6kFT9nbZJe53oPTXyIRHFdnVNlrakzlAA0C6Ry9lWOP9JzGjfWzqSep+mlDhSnDGGytkcduA0A8AgLdi3/NQ+0/fWAxS8l1hi4+ZR3stwU4YXAQozlYg9J399XwMc0HMsuJmbIRSodrbJPjn0bTQABJILHcyI9lKbBNm/qOBIaOBA/Y2fLRUR4lzHCJrqzHkb+tLF2cRfVtUV411HnGoG/nWeGGCKTPV1sF0JYZJWZTIRz21W/7I4w3bDk2hbKuU0JOYZVaTI01YiPKtrXiQl/Hb881ilgEFMbtusJ28y/G7wksWCSuYiBlVZAG+4O/yaod8ZXOk+JZJXgDK3e6CXcGSPZsJIAA8p3mrBrfBIkk6qp8dV3EvDAwVyCIAAPhJ0beGAjTnTLSElZu3zqpCg6NJMgMCxERAiZ+jmBMQK1CSgvW2IDLlgAqYHildDGWYEFBEQIBIqQrZCMcPxxA7oOVLgoCmhJKRK6QCAZG/OqjbTmam12UrRcVxd9n7i0Qw7i2SjG2oZmIAOZ4ZB6RO8lVAIrqu1K0xnSys5/JriX9Xb/zX/vU8vVFr084AHqNjoY+qKyh7lo7sJTgm5MR7R9tMPcl3QSfF7o2IPrH3VLvCkY1GUujdAfUTTEigY6TTbY+laInpB/1qWdLKUty3oYDj1A0E6GkAapOFYIHEW7k3JWQBLBT4WXVQYO/MVlgZlio72fqrHuty02L4dauZS4kqCAZI0Oh260nxtfupslczRqfh8DbRs6g5oyySSYnNGvnQ2MNNhJ0rnCjsgV/t1gEd0e+VdHZGHdXjBQlSJCQdQdqnamMNIRYHqFGfhC4f/WP/AOV/9yi0/ZZeXqPukPwhYH9OP7vEf5VFhP2WXl6j7pp+EPBfph8y/wD5dFhL2WXl6j7pP5xMF+lHzL3+XRYT9ll5eo+6UfCHgv0o+Ze/cosJezS8vUJw+EHBfpl+Zf8A8uiwj2WXl6hKPhAwP9YX+7v/AOXRYR7NLy9R91IO3uA/rI/u737lFhHssvL1Cv8AC+N4TGd4lm4LkAZxlddGkD0gN4O1IgOFKBjfEQ4ik89n8P8Amf8AMap9mj/CrPapOat4PBW7SlUEAmTrOpAHP1CrGRtYKCqkkdIbcvIPhEs/7XfdlnLkiMw+TbWcwIGsjfypE+9osT/iKAm/EAGViSQR4iMgGrchoIA5ayYqBZqqiFQv/F5JEATqsnUt4s5bXKQoMaADTTnVgLq1T1pSMqjMJOafLTSJ8MkbHQiZJ6UieiScPEGQ58sbSSPUwGuxjQjT11GtbS6qzhbctoyNtlb0do665o5wdQOomDqpC2V65iGTPbwwfPbCveYXHIAmUVERoYQrZioGo10rZHN7o0JP5xWqIEt3Wa/Ad/8AMxnzrdSzO/T6hW6fq+q9QV+U6x5dI+2qdFptOk6+/wDj2QKE7SF+sn2fd7/dRaMycHPID6f4/iaEWE4M3T3A/wARTRYTQ7dPro1S0QTtlxi9h7C3LLd2/eKM2VW0KtIhgRyHuosqyKNj3UQsqO22PI1xtrlvaTny/I8qVrR7NH+n1/lNvdssaAT8cstA2FpJPkJsjX10WgYaP9Pr/KCZ5d7jXbDs5ZmzByJdsxIATQyTt50lbWlAFPbEBRIOFfbQIxn5ygf/ABQnlvmkJWV8WG8MjZ4aebeHWhGU9UlzEBRP+zNBiAhMzGviAEDahFHqE03VYCe4XxZoysD+yYBGU9KEwK5qXvV3nC9YyXPd6P8AEUJV4qO5eDL/APbrm10VgVjloIG3KhMCjxTnuLv/ALMdNgtzly1G59cUJVfNc14MNsMJXkHBHu0ze+iwgNI5qbhXEruFztZv2gWAnTNmgmAM6ROp6b0XST4xJo4FFV7ZY3+tWOX9Hb5/8OnaqOGj/Sfz5qS523x6gkYqyYjRUSTPSUG1GqBh4j/iVmuNcZu3rgv3nVmYLbY5E9FZaYgDlB12OoOgJVrl4yNrJKaOH3VLFWLdsaiVdiLYzN4XltCpIiWG0bMD1pNJKxC08cNDtnLMjKcqlIJiAMrBmJIA0ga6E65hUe8LRSQdQpd3KLraRfOS07yASxDA+Hedid5oBJ3SBJ3TcSrHx20LA9QpGkk5WnPIPr5RvTFHQp6cU61eAg5CCWIMToWMxo0lTJ68j0oc3gilrbmExN3DW7iX8lpV8aMznOczekqzmGqjaDBkaVdhhTPNWR7Kt8ctf7n/AMx/7NaNVZqvQW9I1x/8itQ3Ubel/HnT/wAkK2uxq9qkFG3pn2fUKZ3Qp7n8f8tTSXW/s+wU00N49+RHrX/C1HBSZ8SBvsfb9tCtVc8vX9tJWBTP/HuoKQStt/HnQnxUVCAo8Rsag9JV+H+if2z9VOLZRduob/on2/XVI3KkrV3ZfV9ta27KB3Tl29hqSipBST4pRQhMubUIWfxXP9qssnxqRQbD8/WPtq5YcV8Y8Pup+2m1/wBn21GLdYxumcP3tfs2v8S1GRVuRW5+UT9lvrt1EbpDdCbnoD1/960cUuKfZ/K3/wBlP8LVYVNa1fQwX7Y/x1rg/thWx7K3Ulav/9k=)">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    Gạo Krông Ana
                                </span>
                            </div>
                        </a>
                    </article>
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="#">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(https://vuagaovn.com/upload/files/gallery/g%E1%BA%A1o_krong_ana.jpg)">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    Gạo sạch krông ana Vua Gạo
                                </span>
                            </div>
                        </a>
                    </article>
                    <article class="splide__slide min-w-[12rem] text-center hover:shadow">
                        <a href="#">
                            <div class="overflow-hidden">
                                <div class="h-40 bg-slate-400 bg-cover bg-center transition hover:rotate-1 hover:scale-[1.1]"
                                    style="background-image: url(https://vuagaovn.com/upload/1/products/m_456299632_dak_lak.png)">
                                </div>
                            </div>
                            <div class="border border-t-0 p-2">
                                <div class="flex items-center justify-center">

                                </div>
                                <span class="line-clamp-1 text-sm text-green-700">
                                    Gạo ST25 Đắk Lắk
                                </span>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const options = {
                    type: 'slide',
                    drag: 'free',
                    focus: 'center',
                    snap: true,
                    perPage: 4,
                    pagination: false,
                    autoScroll: {
                        speed: 0.5,
                    },
                    grid: {
                        dimensions: [
                            [1, 1]
                        ],
                        gap: {
                            row: '0.5rem',
                            col: '0.5rem',
                        },
                    },
                    breakpoints: {
                        992: {
                            perPage: 1,
                            grid: {
                                dimensions: [
                                    [1, 2]
                                ],
                            },
                        },
                        768: {
                            perPage: 1,
                            grid: {
                                dimensions: [
                                    [1, 2]
                                ],
                            },
                        },
                    },
                }
                new Splide('.products', options).mount(window.splide.Extensions)
            })
        </script>
    </div>

    <div class="grid h-auto grid-cols-5 gap-2 mt-3">
        <div class="col-span-5 md:col-span-3">
            <a href=""
                class="main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://baodaklak.vn/file//fb9e3a03798789de0179a1704dea238e/052024/img_9829_20240519202115.jpg"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Sức trẻ trên những cánh đồng
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                        Đắk Lắk là vựa lúa lớn ở khu vực Tây Nguyên. Cây lúa đã mang lại sự no đủ cho hàng vạn người và giúp biết bao nông dân đổi đời. Trong hành trình của cây lúa ở vùng đất này, sức trẻ, khát vọng của nhiều thế hệ thanh niên đã in dấu đậm nét.
                    </p>
                </div>
            </a>
            <a href=""
                class="hidden main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://baodaklak.vn/file//fb9e3a03798789de0179a1704dea238e/052024/_mg_7382_20240509210053.jpg"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Huyện Krông Ana: Nông dân phấn khởi vì lúa được mùa, giá tốt
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                        Trên các cánh đồng lúa vụ đông xuân 2023 - 2024 chín vàng, nặng hạt ở các xã Bình Hòa, Quảng Điền, thị trấn buôn Trấp (huyện Krông Ana)… không khí thu hoạch đang rất sôi động, khẩn trương. Niềm vui nhân đôi khi lúa đạt năng suất, giá cả tốt.
                    </p>
                </div>
            </a>
            <a href=""
                class="hidden main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://krongana.daklak.gov.vn/Upload/Images/1/Lu%C3%A2n/%C4%91%C3%B4ng%20xu%C3%A2n%201%20(2)(1).jpg"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Nông dân huyện Krông Ana phấn khởi bước vào vụ thu hoạch lúa Đông - Xuân
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                        Vụ Đông Xuân 2019 - 2020, huyện Krông Ana gieo trồng được hơn 6.837 ha cây hàng năm; đạt 101,23% KH, tăng trên 60 ha so vụ Đông - Xuân năm trước. Trong đó, lúa nước 5.841 ha, tập trung với diện tích lớn ở các xã Quảng Điền, Bình Hòa, Dur Kmăl và thị trấn Buôn Trấp.
                    </p>
                </div>
            </a>
            <a href=""
                class="hidden main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://danviet.mediacdn.vn/296231569849192448/2023/11/24/220lua-1700796558606-17007965586731978060896.png"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Trồng lúa hữu cơ trên cánh đồng Buôn Trấp ở Đắk Lắk, nông dân giảm chi phí, thu nhập tăng
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                        Ngày 13/9/2023, Trạm Khuyến nông huyện Krông Ana (tỉnh Đắk Lắk) đã tổ chức tổng kết đánh giá kết quả thực hiện mô hình “sản xuất lúa theo hướng hữu cơ” triển khai trong vụ Hè Thu năm 2023 trên địa bàn huyện.
                    </p>
                </div>
            </a>
            <a href=""
                class="hidden main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://baodaklak.vn/file/fb9e3a03798789de0179a1704dea238e/old-data/dataimages/201901/original/images2735594_lu_a_krong_ana.jpg"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Thương hiệu "Gạo Krông Ana": Giấc mơ không còn xa
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                       Là một trong những địa phương có diện tích trồng lúa lớn nhất của tỉnh, chính quyền và nhân dân huyện Krông Ana đang tập trung xây dựng nhãn hiệu “Gạo Krông Ana”.
 
                        Những thủ tục cần thiết đến nay đã hoàn thành và không lâu nữa Thương hiệu “Gạo Krông Ana” sẽ xuất hiện trên thị trường, giá trị hạt gạo sẽ được nâng lên tầm  cao mới.
                    </p>
                </div>
            </a>
            <a href=""
                class="hidden main">
                <div class="img h-auto bg-slate-400">
                    <img style="width: -webkit-fill-available; height: 21rem;"
                        src="https://doanhnghiepkinhtexanh.vn/uploads/images/2024/05/20/nong-dan-xa-binh-hoa-huyen-krong-ana-dua-lua-sau-khi-thu-hoach-ve-noi-tap-ket-de-thuong-lai-van-chuyen-ve-cac-tinh-mien-tay-1716181504.jpg"
                        alt="" />
                </div>
                <div class="bg-slate-100 p-2 h-28">
                    <h2 class="text-normal line-clamp-2 text-justify font-medium text-red-600">
                        Giá trị chuỗi lúa gạo Đắk Lắk chưa phát huy hết tiềm năng
                    </h2>
                    <p class="mt-2 line-clamp-2 text-justify text-sm">
                        Đắk Lắk có nhiều tiềm năng và lợi thế về lúa gạo. Tuy nhiên, do khâu chế biến đều thiếu và yếu nên sau thu hoạch hầu hết lúa của địa phương đều bị “xuất thô” nên hiệu quả kinh tế đạt được chưa như kỳ vọng.
                    </p>
                </div>
            </a>
        </div>
        <div class="col-span-5 md:col-span-2">
            <h2 class="text-normal border-b border-blue-500 pb-1 font-bold uppercase text-red-600">
                Tin tức </h2>
            <ul
                class="h-[420px] snap-y snap-mandatory divide-y overflow-y-scroll overscroll-contain border border-blue-100 text-sm scrollbar-hide">
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://baodaklak.vn/file//fb9e3a03798789de0179a1704dea238e/052024/img_9829_20240519202115.jpg"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Sức trẻ trên những cánh đồng
                        </span>
                    </a>
                </li>
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://baodaklak.vn/file//fb9e3a03798789de0179a1704dea238e/052024/_mg_7382_20240509210053.jpg"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Huyện Krông Ana: Nông dân phấn khởi vì lúa được mùa, giá tốt
                        </span>
                    </a>
                </li>
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://krongana.daklak.gov.vn/Upload/Images/1/Lu%C3%A2n/%C4%91%C3%B4ng%20xu%C3%A2n%201%20(2)(1).jpg"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Nông dân huyện Krông Ana phấn khởi bước vào vụ thu hoạch lúa Đông - Xuân
                        </span>
                    </a>
                </li>
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://danviet.mediacdn.vn/296231569849192448/2023/11/24/220lua-1700796558606-17007965586731978060896.png"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Trồng lúa hữu cơ trên cánh đồng Buôn Trấp ở Đắk Lắk, nông dân giảm chi phí, thu nhập tăng
                        </span>
                    </a>
                </li>
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://baodaklak.vn/file/fb9e3a03798789de0179a1704dea238e/old-data/dataimages/201901/original/images2735594_lu_a_krong_ana.jpg"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Thương hiệu "Gạo Krông Ana": Giấc mơ không còn xa
                        </span>
                    </a>
                </li>
                <li class="snap-center snap-always p-2">
                    <a href="#" class="flex gap-2 hover:text-red-600">
                        <div class="img w-20 flex-none bg-slate-300">
                            <img class="h-16 w-auto"
                                src="https://doanhnghiepkinhtexanh.vn/uploads/images/2024/05/20/nong-dan-xa-binh-hoa-huyen-krong-ana-dua-lua-sau-khi-thu-hoach-ve-noi-tap-ket-de-thuong-lai-van-chuyen-ve-cac-tinh-mien-tay-1716181504.jpg"
                                alt="" />
                        </div>
                        <span class="line-clamp-3 text-justify leading-5">
                            Giá trị chuỗi lúa gạo Đắk Lắk chưa phát huy hết tiềm năng
                        </span>
                    </a>
                </li>
            </ul>
            <script>
                function news() {
                    for (let i = 0; i < newsListLength && i < mainNewsListLength; i++) {
                        newsList[i].classList.remove('bg-blue-100')
                        mainNewsList[i].classList.add('hidden')
                    }
                    newsList[currentIndex].classList.add('bg-blue-100')
                    mainNewsList[currentIndex].classList.remove('hidden')
                    currentIndex++
                    if (currentIndex >= newsListLength) {
                        currentIndex = 0
                    }
                }

                let newsList = document.querySelectorAll('li.snap-center')
                let mainNewsList = document.querySelectorAll('a.main')
                let newsListLength = newsList.length
                let mainNewsListLength = mainNewsList.length

                let currentIndex = 0
                let interval = setInterval(news, 5000)

                news()
            </script>
        </div>
    </div>

    <div class="relative mx-auto mt-4">
        <div class="flex items-center gap-2">
            <h2 class="whitespace-nowrap font-bold uppercase text-orange-600">
                hình ảnh hoạt động </h2>
            <div class="w-full border-b border-orange-600"></div>
        </div>

        <div class="relative flex items-center">
            <div id="images"
                class="flex snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth py-4 scrollbar-hide">
                <figure class="h-auto w-80 flex-none">
                    <img class="w-full h-60"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoX6iURYsItJEpJDgvn-SB39TqhdsDsRyoXA&s"
                        alt="Sản xuất lúa gạo hàng hóa tại Đắk Lắk - Giống lúa TBR 225 và TBR 279 trên cánh đồng huyện Lắk" />
                    <figcaption
                        class="line-clamp-2 flex h-10 items-center justify-center bg-gray-100 p-1 text-center text-xs italic">
                        Sản xuất lúa gạo hàng hóa tại Đắk Lắk - Giống lúa TBR 225 và TBR 279 trên cánh đồng huyện Lắk
                    </figcaption>
                </figure>
                <figure class="h-auto w-80 flex-none">
                    <img class="w-full h-60"
                        src="https://media.vov.vn/sites/default/files/styles/large_watermark/public/2024-05/lua_duoc_gia_1_20240514164348.jpg"
                        alt="Lúa được mùa được giá nông dân Đắk Lắk phấn khởi đón mùa vàng" />
                    <figcaption
                        class="line-clamp-2 flex h-10 items-center justify-center bg-gray-100 p-1 text-center text-xs italic">
                        Lúa được mùa được giá nông dân Đắk Lắk phấn khởi đón mùa vàng
                    </figcaption>
                </figure>
                <figure class="h-auto w-80 flex-none">
                    <img class="w-full h-60"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxaqSPXMeh3BnpT9C6_t82DON-smSRycqHxw&s"
                        alt="" />
                    <figcaption
                        class="line-clamp-2 flex h-10 items-center justify-center bg-gray-100 p-1 text-center text-xs italic">
                        Đắk Lắk xây dựng thương hiệu cho các sản phẩm đặc trưng
                    </figcaption>
                </figure>
                <figure class="h-auto w-80 flex-none">
                    <img class="w-full h-60"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRxCd-26eax4ne_a5LXEs03YMYlbsXc3qlBQ&s"
                        alt="Về vùng đất núi lửa Krông Nô, Đắk Nông, thưởng thức cơm gạo đặc sản " />
                    <figcaption
                        class="line-clamp-2 flex h-10 items-center justify-center bg-gray-100 p-1 text-center text-xs italic">
                        Về vùng đất núi lửa Krông Nô, Đắk Nông, thưởng thức cơm gạo đặc sản
                    </figcaption>
                </figure>
                <figure class="h-auto w-80 flex-none">
                    <img class="w-full h-60"
                        src="https://cdnmedia.baotintuc.vn/Upload/DMDnZyELa7xUDTdLsa19w/files/2019/08/lua-d.jpg"
                        alt="Nông dân Đắk Lắk chạy đua với thời gian cứu lúa bị ngập " />
                    <figcaption
                        class="line-clamp-2 flex h-10 items-center justify-center bg-gray-100 p-1 text-center text-xs italic">
                        Nông dân Đắk Lắk chạy đua với thời gian cứu lúa bị ngập
                    </figcaption>
                </figure>
                
            </div>
            <div class="absolute left-0 flex h-full w-10 items-center justify-center">
                <span onclick="prev('images')"
                    class="ml-2 cursor-pointer rounded-full bg-lime-500 p-2 text-white hover:bg-lime-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
            </div>
            <div class="absolute right-0 flex h-full w-10 items-center justify-center">
                <span onclick="next('images')"
                    class="mr-2 cursor-pointer rounded-full bg-lime-500 p-2 text-white hover:bg-lime-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
            </div>
        </div>

    </div>
</x-website-layout>
