Receiving Facebook Leads on a Webhook
===========================

My instructions are based on  [@eladnava](https://eladnava.com/get-facebook-ad-lead-notifications-in-realtime-with-node-js-webhooks.)

## 1 - Create an App

Head over to [developer.facebook.com](https://developers.facebook.com/apps/) and create an App

## 2 - Setup the webhook

On your server, create a facebook webhook that will handle facebook calls. Then create a ["leadgen"](https://developers.facebook.com/docs/graph-api/webhooks/getting-started/webhooks-for-leadgen) webhook on you App: [https://developers.facebook.com/docs/graph-api/webhooks/getting-started](https://developers.facebook.com/docs/graph-api/webhooks/getting-started)

## 3 - Get page access token

Visit the [Graph API Explorer](https://developers.facebook.com/tools/explorer/) and add the click Generate Access Token: (Ask for the following permissions: pages_show_list, ads_management, ads_read, leads_retrieval, pages_read_engagement, pages_manage_metadata, pages_manage_ads)

**Note**: Token should now be listed in: [https://developers.facebook.com/tools/accesstoken/](https://developers.facebook.com/tools/accesstoken/)

## 4 - Register App to Page

Subscribe App to Page using your access token

```bash
curl -i -X POST "https://graph.facebook.com/{page-id}/subscribed_apps
  ?subscribed_fields=leadgen
  &access_token={page-access-token}"
```

## 5 - Subscribe App to Page

Go to Bussines Settings Page -> [Leads Access](https://business.facebook.com/settings/leads-accesses/) -> CRM. And add you App to receive leads [https://business.facebook.com/settings/leads-accesses/](https://business.facebook.com/settings/leads-accesses/)

## 6 - Test Webhook requests

Go to [https://developers.facebook.com/tools/lead-ads-testing](https://developers.facebook.com/tools/lead-ads-testing) and test you lead
