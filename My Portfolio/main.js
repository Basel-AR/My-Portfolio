(function () {
    var alertBox = document.querySelector('.alert-box');
    var header = document.querySelector('.header-container');
    var introContainer = document.querySelector('.intro-container-box');
    var content = document.querySelector('.content');
    var probtn = document.getElementById('probtn');
    var proSection = document.getElementById('projects');
    var backBtn = document.getElementById('backBtn');
    var aboutBtn = document.getElementById('aboutBtn');
    var aboutSection = document.getElementById('about');
    var stars = document.getElementById('stars');
    var moon = document.getElementById('moon');
    var backAboutBtn = document.getElementById('backAboutBtn');
    var skillBtn = document.getElementById('skillBtn');
    var skillSection = document.getElementById('skill');
    var backSkillBtn = document.getElementById('backSkillBtn');
    var contactSection = document.getElementById('contact');
    var contactBtn = document.getElementById('contBtn');
    var backContactBtn = document.getElementById('backContactBtn');
    var messageBox = document.getElementById('message');
    var charCount = document.querySelector('.character-count');
    var checkBox = document.querySelector('.check-box');
    var cbSpan = document.getElementById('cbSpan');
    if (alertBox) {
        setTimeout(function () { return alertBox.classList.add('show'); }, 50);
        setTimeout(function () {
            alertBox.classList.remove('show');
            setTimeout(function () { return alertBox.remove(); }, 1000);
        }, 6000);
    }
    probtn === null || probtn === void 0 ? void 0 : probtn.addEventListener('click', function () {
        stars === null || stars === void 0 ? void 0 : stars.classList.add('moveStarsLeft');
        moon === null || moon === void 0 ? void 0 : moon.classList.add('moveMoonLeft');
        content === null || content === void 0 ? void 0 : content.classList.add('slider');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.add('slider');
        header === null || header === void 0 ? void 0 : header.classList.add('slider');
        setTimeout(function () {
            header.style.display = 'none';
        }, 1500);
        proSection === null || proSection === void 0 ? void 0 : proSection.classList.remove('hideRight');
    });
    backBtn === null || backBtn === void 0 ? void 0 : backBtn.addEventListener('click', function () {
        stars === null || stars === void 0 ? void 0 : stars.classList.remove('moveStarsLeft');
        moon === null || moon === void 0 ? void 0 : moon.classList.remove('moveMoonLeft');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.remove('slider');
        content === null || content === void 0 ? void 0 : content.classList.remove('slider');
        proSection === null || proSection === void 0 ? void 0 : proSection.classList.add('hideRight');
    });
    aboutBtn === null || aboutBtn === void 0 ? void 0 : aboutBtn.addEventListener('click', function () {
        console.log('Script loaded successfully.');
        stars === null || stars === void 0 ? void 0 : stars.classList.add('moveStarsBottom');
        moon === null || moon === void 0 ? void 0 : moon.classList.add('moveMoonBottom');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.add('sliderBott');
        content === null || content === void 0 ? void 0 : content.classList.add('sliderBott');
        header === null || header === void 0 ? void 0 : header.classList.add('sliderBott');
        setTimeout(function () {
            header.style.display = 'none';
        }, 1500);
        aboutSection === null || aboutSection === void 0 ? void 0 : aboutSection.classList.remove('hideTop');
    });
    backAboutBtn === null || backAboutBtn === void 0 ? void 0 : backAboutBtn.addEventListener('click', function () {
        stars === null || stars === void 0 ? void 0 : stars.classList.remove('moveStarsBottom');
        moon === null || moon === void 0 ? void 0 : moon.classList.remove('moveMoonBottom');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.remove('sliderBott');
        content === null || content === void 0 ? void 0 : content.classList.remove('sliderBott');
        aboutSection === null || aboutSection === void 0 ? void 0 : aboutSection.classList.add('hideTop');
    });
    skillBtn === null || skillBtn === void 0 ? void 0 : skillBtn.addEventListener('click', function () {
        skillSection === null || skillSection === void 0 ? void 0 : skillSection.classList.remove('hideRight');
        aboutSection === null || aboutSection === void 0 ? void 0 : aboutSection.classList.add('hideLeft');
    });
    backSkillBtn === null || backSkillBtn === void 0 ? void 0 : backSkillBtn.addEventListener('click', function () {
        skillSection === null || skillSection === void 0 ? void 0 : skillSection.classList.add('hideRight');
        aboutSection === null || aboutSection === void 0 ? void 0 : aboutSection.classList.remove('hideLeft');
    });
    contactBtn === null || contactBtn === void 0 ? void 0 : contactBtn.addEventListener('click', function () {
        stars === null || stars === void 0 ? void 0 : stars.classList.add('moveStarsTop');
        moon === null || moon === void 0 ? void 0 : moon.classList.add('moveMoonTop');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.add('sliderTop');
        content === null || content === void 0 ? void 0 : content.classList.add('sliderTop');
        header === null || header === void 0 ? void 0 : header.classList.add('sliderTop');
        setTimeout(function () {
            header.style.display = 'none';
        }, 1500);
        contactSection === null || contactSection === void 0 ? void 0 : contactSection.classList.remove('hideBottom');
    });
    backContactBtn === null || backContactBtn === void 0 ? void 0 : backContactBtn.addEventListener('click', function () {
        stars === null || stars === void 0 ? void 0 : stars.classList.remove('moveStarsTop');
        moon === null || moon === void 0 ? void 0 : moon.classList.remove('moveMoonTop');
        introContainer === null || introContainer === void 0 ? void 0 : introContainer.classList.remove('sliderTop');
        content === null || content === void 0 ? void 0 : content.classList.remove('sliderTop');
        contactSection === null || contactSection === void 0 ? void 0 : contactSection.classList.add('hideBottom');
    });
    messageBox === null || messageBox === void 0 ? void 0 : messageBox.addEventListener('input', function () {
        if (messageBox) {
            var currentLength = messageBox.value.length;
            var remaining = 1000 - currentLength;
            if (charCount) {
                charCount.textContent = "".concat(remaining);
            }
            if (remaining <= 0) {
                messageBox.disabled = true;
            }
        }
    });
    var isChecked = true;
    checkBox === null || checkBox === void 0 ? void 0 : checkBox.addEventListener('click', function () {
        if (checkBox) {
            if (isChecked) {
                checkBox.innerHTML = "<i class=\"fa-solid fa-check\"></i>";
                checkBox.style.backgroundColor = '#fff';
            }
            else {
                checkBox.innerHTML = "";
                checkBox.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            }
            isChecked = !isChecked;
        }
    });
    cbSpan === null || cbSpan === void 0 ? void 0 : cbSpan.addEventListener('click', function () {
        if (checkBox) {
            if (isChecked) {
                checkBox.innerHTML = "<i class=\"fa-solid fa-check\"></i>";
                checkBox.style.backgroundColor = '#fff';
            }
            else {
                checkBox.innerHTML = "";
                checkBox.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            }
            isChecked = !isChecked;
        }
    });
})();
