#!/bin/bash
# Usage: ./tweet.sh "Your tweet text here"
# Posts a tweet via X.com using OpenClaw browser automation
# Requires: openclaw browser logged into @Aaga_HQ

TWEET_TEXT="$1"

if [ -z "$TWEET_TEXT" ]; then
  echo "Usage: ./tweet.sh \"Your tweet text\""
  exit 1
fi

echo "Posting tweet: $TWEET_TEXT"

# Navigate to compose
openclaw browser navigate --url "https://x.com/compose/post" --profile openclaw 2>/dev/null

sleep 3

# Type the tweet using keyboard automation
openclaw browser type --text "$TWEET_TEXT" --profile openclaw 2>/dev/null

sleep 1

# Post with Ctrl+Enter
openclaw browser press --key "Control+Enter" --profile openclaw 2>/dev/null

echo "Tweet posted!"
