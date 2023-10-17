(($, drupalSettings) => {
  const generatedConfig = drupalSettings.azure_appinsights;
  const init = new Microsoft.ApplicationInsights.ApplicationInsights({
    config: generatedConfig
  });
  const appInsights = init.loadAppInsights();

  appInsights.trackPageView();
})(jQuery, drupalSettings);
