Receiving Facebook Leads on a Webhook
===========================

Please check [@eladnava](https://gist.github.com/eladnava)'s updated step-by-step guide for 2020 here: https://eladnava.com/get-facebook-ad-lead-notifications-in-realtime-with-node-js-webhooks/

## 1 - Create an App

Head over to developer.facebook.com and create an App

## 2 - Setup the webhook

On your server, create a facebook webhook that will handle facebook calls. Then create a "leadgen" webhook on you App: [https://developers.facebook.com/docs/graph-api/webhooks/v10](https://developers.facebook.com/docs/graph-api/webhooks/v10)

## 3 - Get an access token

Get lifetime access token to App (I asked for the following permissions: manage_pages, publish_pages, publish_actions, public_profile)

**Note**: Token should now be listed in: [https://developers.facebook.com/tools/accesstoken/](https://developers.facebook.com/tools/accesstoken/)

## 4 - Register App to Page

Subscribe App to Page using your access token

```bash
curl \
-F "access_token=<ACCESS_TOKEN>" \
-F "subscribed_fields=leadgen" \
"https://graph.facebook.com/v10/<PAGE_ID>/subscribed_apps"
```

## 5 - Subscribe App to Page

Go to Bussines Settings Page -> Leads Access -> CRM. And add you App to receive leads [https://business.facebook.com/settings/leads-accesses/](https://business.facebook.com/settings/leads-accesses/)

## 6 - Test Webhook requests

Go to [https://developers.facebook.com/tools/lead-ads-testing](https://developers.facebook.com/tools/lead-ads-testing) and test you lead
