// TODO: Need to require *AppStorage.js*
var storagePrefix = "";
var parts = location.hostname.replace(/(\.com|\.de|\.ng|\.co\.za)$/g, '').split(".");
if (parts.length > 1) {
    parts.pop();
    storagePrefix = parts.join("_") + "_";
}
//

// TODO: Need to require *resolveLanguage.js*
function resolveLanguage() {
    var storedLang = window.localStorage ? window.localStorage.getItem(storagePrefix + 'lang') : undefined;
    if (storedLang) {
        return storedLang;
    }

    var langs = ['en'];
    for (var i = 0; i < langs.length; i++) {
        var lang = langs[i];
        var v = location.host.match(new RegExp("\." + lang + "($|:)"));
        if (v) {
            return lang;
        }
    }

    var lang = (window.navigator.userLanguage || window.navigator.language).split('-')[0];
    if (langs.indexOf(lang) >= 0) {
        return lang
    }

    return 'en';
}
//-----

function localizePack(pack, appName) {
    // Localization, depends on jquery.localize meta data [data-localize]
    var language = resolveLanguage();
    $("[data-localize]").localize(pack, {
        language : language,
        callback : function (data, defaultCallback) {
            // TODO: Need to require logic from i18n.js
            var formattedString = JSON.stringify(data)
                .replace(/@@appName/g, appName);
            var formattedData = JSON.parse(formattedString);

            defaultCallback(formattedData);
        }
    });
}

function changeLanguage(lang) {
    window.localStorage.setItem(storagePrefix + 'lang', lang);
}