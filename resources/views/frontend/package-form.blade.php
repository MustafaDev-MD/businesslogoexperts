    <x-layouts.frontend
        title="Package Form"
        description="Learn about Business Logo Experts, our mission, values, and the team behind our innovative digital marketing strategies that help businesses grow.">

        <!-- Section Banner -->
        <x-banner
            title="Package Form"
            current="Package Form" />

        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-4">
                        <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                            <div class="spacer"></div>
                            <h4><i class="fa-regular fa-circle-dot"></i> {{ $service['name'] }} / {{ $package['name'] }}</h4>
                            <p>{{ $package['description'] }}</p>
                            <div class="d-flex flex-row gspace-1 align-items-center">
                                <h3>${{ $package['price'] }}</h3>
                                <p>/Month</p>
                            </div>
                            <!-- <a href="#" class="btn btn-accent">
                                <div class="btn-title">
                                    <span>View Details</span>
                                </div>
                                <div class="icon-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a> -->
                            <!-- <div class="core-benefits">
                                <div class="benefit">
                                    <i class="fa-solid fa-brain"></i>
                                    <a href="javascript:void(0)">Dedicated Account Manager</a>
                                </div>
                                <div class="benefit">
                                    <i class="fa-brands fa-accessible-icon"></i>
                                    <a href="javascript:void(0)">Priority Support 24/7</a>
                                </div>
                                <div class="benefit">
                                    <i class="fa-solid fa-bug"></i>
                                    <a href="javascript:void(0)">Customized Growth Strength</a>
                                </div>
                            </div> -->
                            <ul class="check-list">
                                @foreach($package['features'] as $feature)
                                <li>
                                    <a href="javascript:void(0)">{{ $feature }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- <a href="{{ url()->previous() }}"> -->
                            <div class="link-wrapper">
                                <a href="{{ url()->previous() }}#pricing">
                                    <i class="fa-solid fa-circle-arrow-left"></i>
                                    Review/Change Package
                                </a>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>

                    <div class="col col-xl-8">

                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                                <form id="packageForm" action="{{ route('package.submit') }}" method="POST" enctype="multipart/form-data" class="form">
                                    @csrf

                                    <!-- Honeypot -->
                                    <input type="text" name="website" style="position:absolute; left:-9999px;">

                                    <!-- Time protection -->
                                    <input type="hidden" name="form_time" value="{{ time() }}">

                                    <input type="hidden" name="service" value="{{ $service['name'] }}">
                                    <input type="hidden" name="package" value="{{ $package['name'] }}">

                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="first_name" id="first-name" placeholder="First Name" value="{{ old('first_name') }}" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="last_name" id="last-name" placeholder="Last Name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>

                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                        </div>
                                    </div>

                                    <div class="file-upload-wrapper">
                                        <label class="file-upload-label">
                                            <input type="file"
                                                name="files[]"
                                                multiple
                                                hidden
                                                id="fileInput"
                                                accept=".jpg,.png,.gif,.mp4,.pdf,.doc,.docx,.zip,.txt">

                                            <div class="file-upload-box">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                                <p>Click to upload files</p>
                                                <span>or drag & drop</span>
                                                <span class="file-types">Allowed: JPG, PNG, GIF, MP4, PDF, DOC, DOCX, ZIP, TXT</span>
                                            </div>
                                        </label>

                                        <div id="fileList" class="file-list"></div>
                                    </div>

                                    <textarea name="message" id="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>

                                    <!-- reCAPTCHA -->
                                    <!-- <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div> -->

                                    <div class="form-button-container">
                                        <button type="submit" class="btn btn-accent">
                                            <span class="btn-title">
                                                <span>Send a Message</span>
                                            </span>
                                            <span class="icon-circle">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="gtoast-container" id="gtoastContainer"></div>

                    </div>

                </div>
            </div>
        </div>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
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
                fileInput.addEventListener('change', function() {
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

                // document.addEventListener("DOMContentLoaded", function() {

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

                // });

            });
        </script>
        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-7">
                        <iframe loading="lazy" class="maps package-form-maps overflow-hidden"
                            src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                            title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
                        </iframe>
                    </div>
                    <div class="col col-xl-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h3 class="title-heading">Get in Touch</h3>
                                <p>Reach out to us for tailored digital solutions that drive results sollicitudin nec.</p>

                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-phone-volume accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Phone Number</span>
                                        <h5>+1 (62) 987 7543</h5>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-envelope accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Email Address</span>
                                        <h5>hello@businesslogoexperts.com</h5>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                    <div>
                                        <div class="icon-wrapper">
                                            <div class="icon-box">
                                                <i class="fa-solid fa-location-dot accent-color"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <span>Office Address</span>
                                        <h5>902 Digital Lane, San Francisco, CA 94110, USA</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-layouts.frontend>