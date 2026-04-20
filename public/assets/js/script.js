// Promise.all([
//     fetch("./header.html").then(res => res.text()),
//     fetch("./footer.html").then(res => res.text()),
//     fetch("./sidebar.html").then(res => res.text()),
//     fetch("./search-form.html").then(res => res.text())
//   ])
//   .then(([headerHTML, footerHTML, sidebarHTML, searchHTML]) => {
//     $("#header").html(headerHTML);
//     $("#footer").html(footerHTML);
//     $("#sidebar").html(sidebarHTML);
//     $("#edit-sidebar").html(sidebarHTML);
//     $("#search-form-container").html(searchHTML);
//   })
//   .then(() => {
//     // -----------------------------
//     // HEADER LOADED - NOW INITIALIZE
//     // -----------------------------
//     initBannerVideo();
//     initNavLink();
//     initSidebar();
//     initEditSidebar();
//     initSidebarDropdown();
//     initCounter();
//     initSearchBar();
//     initSubmitContact();
//     initSubmitNewsletter();
//     initAnimateData();

//     // Theme switch & logo
//     initThemeSwitch();

//     // Font Awesome - ensure icons render
//     if (!document.getElementById('fa-kit')) {
//         // const faScript = document.createElement('script');
//         faScript.id = 'fa-kit';
//         faScript.src = 'https://kit.fontawesome.com/YOUR_KIT_ID.js'; // <-- Replace with your kit ID
//         faScript.crossOrigin = 'anonymous';
//         document.head.appendChild(faScript);
//     }
//   });

$(document).ready(function () {
    initBannerVideo();
    initNavLink();
    initSidebar();
    initEditSidebar();
    initSidebarDropdown();
    initCounter();
    initSearchBar();
    initSubmitContact();
    initSubmitNewsletter();
    initAnimateData();
    initThemeSwitch();
});

// function initBannerVideo() {
//     var player;

//     var $tag = $('<script>', { src: "https://www.youtube.com/iframe_api" });
//     $('script').first().before($tag);

//     window.onYouTubeIframeAPIReady = function () {
//         player = new YT.Player('banner-video-background', {
//             videoId: 'P68V3iH4TeE',
//             playerVars: {
//                 'autoplay': 1,
//                 'controls': 0,
//                 'mute': 1,
//                 'loop': 1,
//                 'playlist': 'P68V3iH4TeE',
//                 'showinfo': 0,
//                 'rel': 0,
//                 'enablejsapi': 1,
//                 'disablekb': 1,
//                 'modestbranding': 1,
//                 'iv_load_policy': 3,
//                 'origin': window.location.origin
//             },
//             events: {
//                 'onReady': onPlayerReady,
//                 'onStateChange': onPlayerStateChange
//             }
//         });
//     };

//     function onPlayerReady(event) {
//         event.target.playVideo();
//         setYoutubeSize();
//         $(window).on('resize', setYoutubeSize);
//     }

//     function onPlayerStateChange(event) {
//         if (event.data === YT.PlayerState.ENDED) {
//             player.playVideo();
//         }
//     }

//     function setYoutubeSize() {
//         var $container = $('.banner-video-container');
//         var containerWidth = $container.outerWidth();
//         var containerHeight = $container.outerHeight();
//         var aspectRatio = 16 / 9;
//         var newWidth, newHeight;

//         if (containerWidth / containerHeight > aspectRatio) {
//             newWidth = containerWidth;
//             newHeight = containerWidth / aspectRatio;
//         } else {
//             newWidth = containerHeight * aspectRatio;
//             newHeight = containerHeight;
//         }

//         if (player && player.getIframe) {
//             var $iframe = $(player.getIframe());
//             $iframe.width(newWidth).height(newHeight);
//         }
//     }

//     function handleYouTubeErrors() {
//         window.addEventListener('message', function (event) {
//             if (event.origin !== 'https://www.youtube.com') return;

//             try {
//                 var data = JSON.parse(event.data);

//             } catch (e) {

//             }
//         });
//     }
// }

function initBannerVideo() {
    const video = document.getElementById('banner-video');
    const container = document.querySelector('.banner-video-container');

    function resizeVideo() {
        if (!video || !container) return;
        video.style.width = container.offsetWidth + 'px';
        video.style.height = container.offsetHeight + 'px';
    }

    resizeVideo();
    window.addEventListener('resize', resizeVideo);
}

function initThemeSwitch() {
    let lightMode = localStorage.getItem('lightmode') === 'active';

    const updateLogos = () => {
        const siteLogo = $('.site-logo');
        if (!siteLogo.length) return;
        const partnerLogos = $('.partner-logo');

        if (lightMode) {
            $('body').addClass('lightmode');
            localStorage.setItem('lightmode', 'active');
            siteLogo.attr('src', '/assets/image/logo-dark.png');
            partnerLogos.each(function () {
                const $img = $(this);
                const src = $img.attr('src');
                if (!src.includes('-dark')) {
                    $img.attr('src', src.replace('.png', '-dark.png'));
                }
            });
        } else {
            $('body').removeClass('lightmode');
            localStorage.removeItem('lightmode');
            siteLogo.attr('src', '/assets/image/logo.png');
            partnerLogos.each(function () {
                const $img = $(this);
                const src = $img.attr('src');
                $img.attr('src', src.replace('-dark.png', '.png'));
            });
        }
    };

    updateLogos();

    $('#themeSwitch').on('click', function () {
        lightMode = !lightMode;
        updateLogos();
        $('#themeIcon')
            .toggleClass('fa-sun', lightMode)
            .toggleClass('fa-moon', !lightMode);
    });
}

$(document).ready(function () {
    initThemeSwitch();
});

function initCounter() {
    var $counters = $(".counter");

    function updateCount($counter) {
        var target = +$counter.data("target");
        var count = +$counter.text().replace("+", "");
        var duration = 2000;
        var steps = 60;
        var increment = Math.max(1, Math.ceil(target / steps));
        var delay = Math.floor(duration / (target / increment));

        if (count < target) {
            var nextCount = Math.min(target, count + increment);
            $counter.text(nextCount);
            setTimeout(function () {
                updateCount($counter);
            }, delay);
        } else {
            $counter.text(target);
        }
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var $counter = $(entry.target);
                updateCount($counter);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    $counters.each(function () {
        observer.observe(this);
    });
}

function initNavLink() {
    const currentUrl = window.location.href;
    $(".navbar-nav .nav-link").each(function () {
        if (this.href === currentUrl) {
            $(this).addClass("active");
        }
    });
    $(".navbar-nav .dropdown-menu .dropdown-item").each(function () {
        if (this.href === currentUrl) {
            $(this).closest(".dropdown").find(".nav-link.dropdown-toggle").addClass("active");
        }
    });
}

$(function () {
    const elements = document.querySelectorAll('[data-animate]');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-delay') || 0;
                setTimeout(() => {
                    entry.target.classList.add(entry.target.getAttribute('data-animate'));
                    entry.target.style.opacity = 1;

                    observer.unobserve(entry.target);
                }, delay);
            }
        });
    }, {
        threshold: 0.1
    });
    elements.forEach(el => observer.observe(el));
});

function initSidebar() {
    const $menuBtn = $('.nav-btn');
    const $closeBtn = $('.close-btn');
    const $overlay = $('.sidebar-overlay');
    const $sidebar = $('.sidebar');

    $menuBtn.click(function () {
        $overlay.addClass('active');
        setTimeout(() => {
            $sidebar.addClass('active');
        }, 200);
    });

    $closeBtn.click(function () {
        $sidebar.removeClass('active');
        setTimeout(() => {
            $overlay.removeClass('active');
        }, 200);
    });

    $overlay.click(function () {
        $sidebar.removeClass('active');
        setTimeout(() => {
            $overlay.removeClass('active');
        }, 200);
    });
}

function initEditSidebar() {
    const $contentBtn = $('.content-edit');
    const $closeBtn = $('.close-btn-second');
    const $overlay = $('.content-overlay');
    const $sidebar = $('.content-edit-sidebar');

    $contentBtn.click(function () {
        $sidebar.addClass('active');
        setTimeout(() => {
            $overlay.addClass('active');
        }, 200);
    });

    $closeBtn.click(function () {
        $sidebar.removeClass('active');
        setTimeout(() => {
            $overlay.removeClass('active');
        }, 200);
    });
}

function initSidebarDropdown() {
    const $dropdownButtons = $(".sidebar-dropdown-btn");

    $dropdownButtons.each(function () {
        $(this).on("click", function () {
            const $dropdownMenu = $(this).parent().next(".sidebar-dropdown-menu");
            const isOpen = $dropdownMenu.hasClass("active");

            $(".sidebar-dropdown-menu").not($dropdownMenu).removeClass("active");

            $dropdownMenu.toggleClass("active", !isOpen);
        });
    });
}


function initSearchBar() {
    const $searchBtn = $(".search-btn");
    const $overlay = $(".search-overlay");
    const $closeBtn = $(".search-close");

    if ($overlay.length === 0) return;

    $searchBtn.on("click", function () {
        $overlay.addClass("active");
        setTimeout(() => {
            $overlay.addClass("active");
        }, 200);
    });

    $closeBtn.on("click", function () {
        $overlay.removeClass("active");
        setTimeout(() => {
            $overlay.removeClass("active");
        }, 200);
    });

    $overlay.on("click", function (e) {
        if ($(e.target).hasClass("search-overlay")) {
            $overlay.removeClass("active");
        }
    });
}



$(document).ready(function () {
    const data = [
        {
            title: "Home",
            description: "Amplify Your Brand with Cutting-Edge Digital Marketing Watch our video reviews and see how businesses achieve success with Marko's digital marketing solutions. Marko empowers businesses to grow online with data driven digital marketing, innovative branding, and performance focused strategies trusted by top brands lorem ipsum dolor sit amet consectetur. Get Started 2.7k Positive Reviews Ready [...]",
            url: "index.html"
        },
        {
            title: "About",
            description: "About Marko Home / About Us 0 + Years of Experience on Digital Marketing Services About Us Who We Are & What Drives Us At Marko, we specialize in crafting innovative digital marketing strategies that drive real business growth. Our expertise ensures your brand stays ahead in the competitive digital landscape. Get to know the [...]",
            url: "about.html"
        },
        {
            title: "Services",
            description: "Our Services Home / Services Our Core Services Digital Solutions That Drive Real Results Social Media Marketing Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip. View Details Content Marketing Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip. View Details PPC Advertising […]",
            url: "service.html"
        },
        {
            title: "Single Services",
            description: "Social Media Marketing Home / Services Details Our Expertise Boost Your Brand with Strategic Social Media Marketing Maximize engagement, build loyal communities, and drive conversions across all major platforms lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Service Overview At Marko, we help brands grow […]",
            url: "single_services.html"
        },
        {
            title: "Case Studies",
            description: "Case Studies Home / Case Studies Case Studies See How We Help Businesses Thrive We don't just talk about results—we deliver them. Here are some of our most impactful case studies showcasing how our digital marketing strategies drive success. More Case Studies Social Influencer Retargeting Google Video Local Community Local Business Digital Transformation 5x ROI […]",
            url: "case_studies.html"
        },
        {
            title: "Our Team",
            description: "Meet Our Team Home / Our Team Case Studies Meet the Minds Behind Your Digital Success Ethan Morales Head of Creative Sophia Zhang Senior SEO Specialist Liam Turner Performance Marketing Lead Olivia Bennett Creative Director Daniel White Client Success Manager Chloe Ramirez Social Media Manager Powering Success for Top Brands Lorem ipsum dolor sit amet, […]",
            url: "team.html"
        },
        {
            title: "Partnership",
            description: "Partnership Home / Partnership Client & Partnership Strong Partnerships, Proven Success See How We Help Brands Grow Transform Your Business with Marko! Take your digital marketing to the next level with data-driven strategies and innovative solutions. Let's create something amazing together! 2.7k Positive Reviews 0 % Improved Project 0 % New Project Social Media Growth […]",
            url: "partnership.html"
        },
        {
            title: "Pricing Plan",
            description: "Pricing Plan Home / Pricing Plan Our Core Services Flexible Pricing Plans for Every Business Let's Find the Right Strategy for You! Book a Free Consultation Starter Perfect for startups & small businesses $99 / Month View Details Basic SEO & Digital Marketing Social Media Management (1 platform) Monthly Performance Report Enterprise Full scale marketing […]",
            url: "pricing.html"
        },
        {
            title: "Testimonial",
            description: "Testimonials Home / Testimonials 2.7k Positive Reviews 0 % Improved Project 0 % New Project Social Media Growth Performance Marketing What Our Client Says Hear from Our Satisfied Clients, Real Success Stories Discover how businesses like yours achieved outstanding growth with Marko's expert digital marketing solutions. Emma Richard CEO Nexatech 'Marko completely transformed our online [...]',",
            url: "testimonial.html"
        },
        {
            title: "FAQs",
            description: "Simple, Direct, and Friendly Home / FAQ Frequently Asked Questions Got Questions? We've Got Answers. What services does Marko offer? We specialize in digital marketing, including branding, social media management, content strategy, paid ads, and analytics-driven campaigns. How long does it take to see results? While some channels like paid ads offer quicker results, most […]",
            url: "faq.html"
        },
        {
            title: "Error 404",
            description: "404 Oops! Page Not Found We couldn't find the page you're looking for. It might have been removed, renamed, or never existed. Back to Home",
            url: "404_page.html"
        },
        {
            title: "Blog",
            description: "Our Blog Home / Blog Insights & Trends Latest Digital Marketing Strategies & Tips Explore our latest blog articles covering industry trends, expert insights, and actionable strategies to elevate your digital marketing game. View All Articles April 14, 2025 Social Media Mastering Instagram and Facebook Ads Lorem ipsum dolor si consectetur adipiscing elit ut elit […]",
            url: "blog.html"
        },
        {
            title: "Single Post",
            description: "Growth Strategies for Digital Businesses Home / Single Post Recent Blog April 14, 2025 Mastering Instagram and Facebook Ads April 14, 2025 Growth Strategies for Digital Business Transform Your Business with Marko! Take your digital marketing to the next level with data-driven strategies and innovative solutions. Let's create something amazing together! Read More How to […]",
            url: "single_post.html"
        },
        {
            title: "Contact Us",
            description: "Contact Us Home / Contact Us Reach out to us Get in Touch Reach out to us for tailored digital solutions that drive results sollicitudin nec. Phone Number +1 (62) 987 7543 Email Address hello@markoagency.com Office Address Marko HQ - 902 Digital Lane, San Francisco, CA 94110, USA",
            url: "contact.html"
        },
    ];

    const params = new URLSearchParams(window.location.search);
    const keyword = params.get("q");

    const $resultContainer = $("#search-results");
    const $resultTitle = $("#result-title");

    if (keyword) {
        $resultTitle.text(`Search Result for "${keyword}" Digital Marketing Agency`);

        const result = data.filter(item =>
            item.title.toLowerCase().includes(keyword.toLowerCase()) ||
            item.description.toLowerCase().includes(keyword.toLowerCase())
        );

        if (result.length > 0) {
            result.forEach(item => {
                const $div = $("<div>").addClass("result").html(`
                    <a href="${item.url}"><h2>${item.title}</h2></a>
                    <p>${item.description}</p>
                `);
                $resultContainer.append($div);
            });
        } else {
            $resultContainer.html(`<p>No results found for the keyword.</p>`);
        }
    } else {
        $resultTitle.text("Enter search keywords.");
    }
});

function initAnimateData() {
    const $elements = $('[data-animate]');
    const observer = new window.IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const $el = $(entry.target);
                const delay = $el.data('delay') || 0;
                setTimeout(() => {
                    $el.addClass($el.data('animate'));
                    $el.css('opacity', 1);
                    observer.unobserve(entry.target);
                }, delay);
            }
        });
    }, {
        threshold: 0.1
    });
    $elements.each(function () {
        observer.observe(this);
    });
}

// var swiper = new Swiper(".swiperTestimonial", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     loop: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

const fileInput = document.getElementById('fileInput');
const fileList = document.getElementById('fileList');
const uploadBox = document.querySelector('.file-upload-box');

let selectedFiles = []; // 🔥 global array

function renderFiles() {
    fileList.innerHTML = '';

    selectedFiles.forEach((file, index) => {
        const div = document.createElement('div');
        div.classList.add('file-item');

        div.innerHTML = `
                <span>${file.name}</span>
                <div class="file-actions">
                    <span>${(file.size / 1024).toFixed(1)} KB</span>
                    <button type="button" onclick="removeFile(${index})">✖</button>
                </div>
            `;

        fileList.appendChild(div);
    });

    // 🔥 important: update input files
    const dataTransfer = new DataTransfer();
    selectedFiles.forEach(file => dataTransfer.items.add(file));
    fileInput.files = dataTransfer.files;
}

// remove file
function removeFile(index) {
    selectedFiles.splice(index, 1);
    renderFiles();
}

// add files
function addFiles(files) {
    Array.from(files).forEach(file => {
        selectedFiles.push(file);
    });
    renderFiles();
}

// click upload
fileInput.addEventListener('change', function () {
    addFiles(this.files);
});

// drag over
uploadBox.addEventListener('dragover', (e) => {
    e.preventDefault();
    uploadBox.classList.add('dragover');
});

// drag leave
uploadBox.addEventListener('dragleave', () => {
    uploadBox.classList.remove('dragover');
});

// drop
uploadBox.addEventListener('drop', (e) => {
    e.preventDefault();
    uploadBox.classList.remove('dragover');
    addFiles(e.dataTransfer.files);
});

document.querySelector("form").addEventListener("submit", function(e) {
    let errors = [];

    let firstName = document.getElementById("first-name");
    let email = document.getElementById("email");
    let subject = document.getElementById("subject");
    let message = document.getElementById("message");

    // reset styles
    document.querySelectorAll("input, textarea").forEach(el => {
        el.classList.remove("error-field");
    });

    // validation rules
    if (!firstName.value.trim()) {
        errors.push("First name is required");
        firstName.classList.add("error-field");
    }

    if (!email.value.trim()) {
        errors.push("Email is required");
        email.classList.add("error-field");
    }

    if (email.value && !/^\S+@\S+\.\S+$/.test(email.value)) {
        errors.push("Email is invalid");
        email.classList.add("error-field");
    }

    if (!subject.value.trim()) {
        errors.push("Subject is required");
        subject.classList.add("error-field");
    }

    if (!message.value.trim()) {
        errors.push("Message is required");
        message.classList.add("error-field");
    }

    // file validation
    let files = document.getElementById("fileInput").files;
    if (files.length > 0) {
        for (let i = 0; i < files.length; i++) {
            if (files[i].size > 50 * 1024 * 1024) {
                errors.push("Each file must be under 50MB");
                break;
            }
        }
    }

    if (errors.length > 0) {
        e.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Validation Error",
            html: errors.join("<br>")
        });
    }
});

document.addEventListener("DOMContentLoaded", function() {

    const form = document.getElementById("packageForm");

    // ---- Custom glassmorphism toast ----
    function showToast(type, message) {
        const container = document.getElementById("gtoastContainer");
        const toast = document.createElement("div");
        toast.className = "gtoast " + type;
        toast.innerHTML = `
<div class="gtoast-icon">${type === 'success' ? '✓' : '✕'}</div>
<div class="gtoast-msg">${message}</div>
`;
        const remove = () => {
            toast.classList.add("removing");
            setTimeout(() => toast.remove(), 250);
        };
        toast.addEventListener("click", remove);
        container.appendChild(toast);
        setTimeout(remove, 4000);
    }

    // ---- Error logic: sirf ek field ek waqt pe ----
    let errorQueue = [];
    let currentIndex = 0;

    function clearAllErrors() {
        document.querySelectorAll(".error-field").forEach(el => {
            el.classList.remove("error-field");
            if (el.dataset.original) {
                el.placeholder = el.dataset.original;
                delete el.dataset.original;
            }
        });
        errorQueue = [];
        currentIndex = 0;
    }

    function highlightField(index) {
        if (index >= errorQueue.length) return;

        const {
            key,
            message
        } = errorQueue[index];
        const el = document.querySelector(`[name="${key}"]`);
        if (!el) return;

        el.classList.add("error-field");
        if (!el.dataset.original) el.dataset.original = el.placeholder;
        el.placeholder = message;
        el.focus();

        // Jab user type kare is field mein, tab clear karo — agli field highlight mat karo
        el.addEventListener("input", function handler() {
            el.classList.remove("error-field");
            if (el.dataset.original) {
                el.placeholder = el.dataset.original;
                delete el.dataset.original;
            }
            el.removeEventListener("input", handler);
        });
    }

    form.addEventListener("submit", async function(e) {
        e.preventDefault();

        clearAllErrors();

        const res = await fetch(form.action, {
            method: "POST",
            headers: {
                "X-Requested-With": "XMLHttpRequest",
                "Accept": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: new FormData(form)
        });

        const data = await res.json();

        if (res.ok && data.status === "success") {
            showToast("success", data.message);
            form.reset();

            document.getElementById("fileList").innerHTML = "";
            document.getElementById("fileInput").value = "";

            return;
        }

        if (res.status === 422 && data.errors) {
            // Queue banao
            errorQueue = Object.keys(data.errors).map(key => ({
                key,
                message: data.errors[key][0]
            }));

            currentIndex = 0;

            // Sirf pehli field highlight + toast
            highlightField(currentIndex);
            showToast("error", errorQueue[currentIndex].message);
        }
    });

    // Dobara submit kare to error queue aage badhti hai
    // (clearAllErrors pehle call hota hai, fresh errors aate hain)

});

document.querySelectorAll('#faqAccordion1 .accordion-button').forEach(button => {
    button.addEventListener('click', function () {
      const target = document.querySelector(this.dataset.bsTarget);
      const isOpen = target.classList.contains('show');
      
      if (isOpen) {
        // Close hone se pehle scroll position lock kar lo
        const rect = this.getBoundingClientRect();
        const scrollY = window.scrollY;
        
        target.addEventListener('hidden.bs.collapse', function handler() {
          const newRect = button.getBoundingClientRect();
          const diff = newRect.top - rect.top;
          window.scrollTo({ top: scrollY + diff, behavior: 'instant' });
          target.removeEventListener('hidden.bs.collapse', handler);
        });
      }
    });
  });