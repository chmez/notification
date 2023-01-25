# Introduce

Webhook for Synology DSM push notifications.

# Installation

1. Open Synology DSM web UI and launch the **Control Panel** package.
1. Click the **Notification** tile in the **System** section and switch to the **Push Service** tab.
1. Press the **Manage Webhooks** button in the **Application Webhooks** section and press the **Add** button.
1. Check the **Custom** radio button and press the **Next** button.
1. Put the URL where this webhook is located in the **Webhook URL** field and select the **POST** option of the **HTTP Method** field.
1. Fill in all other fields and press the **Next** button.
1. Press the **Add Field** button and put the **token** word in the **Parameter** field.
1. Сome up with a secret phrase and put it in the **Value** field and press the **Next** button.
1. Fill in the **Parameter** field and press the **Next** button.
1. Select the **Message Content** item of a drop-down menu in the **Category** column of the third row and press the **Apply** button.
