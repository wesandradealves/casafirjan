"use strict";

(function ($, drupalSettings) {
  var generatedConfig = drupalSettings.azure_appinsights;
  var init = new Microsoft.ApplicationInsights.ApplicationInsights({
    config: generatedConfig
  });
  var appInsights = init.loadAppInsights();
  appInsights.trackPageView();
})(jQuery, drupalSettings);