// ── Fade-in on scroll ──
const observer = new IntersectionObserver(entries => {
    entries.forEach((e, i) => {
        if (e.isIntersecting) {
            setTimeout(() => e.target.classList.add('visible'), i * 75);
            observer.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));


// ── Smooth scroll ──
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const href = a.getAttribute('href');
        if (href === '#' || href === '#!') { e.preventDefault(); return; }
        const t = document.querySelector(href);
        if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
});


// ── Active nav on scroll ──
const secs = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
    let c = '';
    secs.forEach(s => { if (window.scrollY >= s.offsetTop - 120) c = s.id; });
    document.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(l => {
        l.classList.toggle('active', l.getAttribute('href') === '#' + c);
    });
}, { passive: true });


// ── Show More / Show Less ──
const showMoreBtn = document.getElementById('show-more-btn');
if (showMoreBtn) {
    showMoreBtn.addEventListener('click', function () {
        const hiddenCards = document.querySelectorAll('.practice-hidden');
        const isExpanded = this.dataset.expanded === 'true';

        if (!isExpanded) {
            hiddenCards.forEach(card => {
                card.classList.remove('practice-hidden');
                card.classList.add('practice-revealed');
                setTimeout(() => card.classList.add('visible'), 50);
            });
            this.textContent = 'Show Less ←';
            this.dataset.expanded = 'true';
        } else {
            document.querySelectorAll('.practice-revealed').forEach(card => {
                card.classList.add('practice-hidden');
                card.classList.remove('practice-revealed', 'visible');
            });
            this.textContent = 'Show More Practice Areas →';
            this.dataset.expanded = 'false';
            const practiceSection = document.getElementById('practice');
            if (practiceSection) practiceSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
}


// ── Enquiry Form ──
const enquiryForm = document.getElementById('enquiryForm');
if (enquiryForm) {
    enquiryForm.addEventListener('submit', async function () {
        const btn = document.getElementById('submitBtn');
        const msg = document.getElementById('formMsg');

        // Clear previous errors
        document.querySelectorAll('.err-msg').forEach(el => el.textContent = '');
        document.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));
        msg.style.display = 'none';

        // Grab values
        const full_name = document.getElementById('full_name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const city = document.getElementById('city').value.trim();
        const case_description = document.getElementById('case_description').value.trim();

        // Validation
        let isValid = true;

        function showError(fieldId, errId, message) {
            const field = document.getElementById(fieldId);
            const errEl = document.getElementById(errId);
            if (field) field.classList.add('input-error');
            if (errEl) errEl.textContent = message;
            isValid = false;
        }

        if (!full_name) {
            showError('full_name', 'err_full_name', 'Full name is required.');
        } else if (!/^[a-zA-Z\s]{2,100}$/.test(full_name)) {
            showError('full_name', 'err_full_name', 'Name must contain only letters (min 2 characters).');
        }

        if (!phone) {
            showError('phone', 'err_phone', 'Phone number is required.');
        } else if (!/^[6-9]\d{9}$/.test(phone)) {
            showError('phone', 'err_phone', 'Enter a valid 10-digit Indian mobile number.');
        }

        if (!city) {
            showError('city', 'err_city', 'City is required.');
        } else if (city.length < 2) {
            showError('city', 'err_city', 'Enter a valid city name.');
        }

        if (!case_description) {
            showError('case_description', 'err_case_description', 'Please describe your legal matter.');
        } else if (case_description.length < 10) {
            showError('case_description', 'err_case_description', 'Description must be at least 10 characters.');
        }

        if (!isValid) return;

        // Submit
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';

        try {
            const res = await fetch('/enquiry/submit', {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value },
                body: new FormData(this)
            });
            const json = await res.json();

            if (json.success) {
                msg.style.cssText = 'display:block;color:#2e7d32;font-size:13px;';
                msg.innerHTML = '<i class="fas fa-check-circle me-1"></i>' + json.message;
                this.reset();
            } else {
                msg.style.cssText = 'display:block;color:#c62828;font-size:13px;';
                msg.innerHTML = '<i class="fas fa-exclamation-circle me-1"></i>' + (json.message || 'Something went wrong. Please try again.');
            }
        } catch (e) {
            msg.style.cssText = 'display:block;color:#c62828;font-size:13px;';
            msg.innerHTML = '<i class="fas fa-exclamation-circle me-1"></i>Something went wrong. Please try again.';
        }

        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i>Submit Enquiry';
    });

    // Live clear error on input
    ['full_name', 'phone', 'city', 'case_description'].forEach(function (id) {
        const el = document.getElementById(id);
        if (el) {
            el.addEventListener('input', function () {
                this.classList.remove('input-error');
                const errEl = document.getElementById('err_' + id);
                if (errEl) errEl.textContent = '';
            });
        }
    });
}

// toggle team

function toggleTeam() {
    const hiddenCards = document.querySelectorAll('.team-card-hidden');
    const btn = document.querySelector('.btn-view-more');
    const isHidden = hiddenCards[0].style.display === 'none' || hiddenCards[0].style.display === '';

    hiddenCards.forEach(card => {
        card.style.display = isHidden ? 'block' : 'none';
    });

    btn.textContent = isHidden ? 'Show Less' : 'View All Lawyers';
}