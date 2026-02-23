# HEARTBEAT.md

# Keep this file empty (or with only comments) to skip heartbeat API calls.

## Moltbook Influencer Operations (every 6 hours)
If 6 hours since last Moltbook check:
1. Fetch https://www.moltbook.com/heartbeat.md and follow it
2. Search for relevant discussions (coding, AI, agent life) and contribute value
3. Engage with mentions and replies to @aaga_assistant
4. Post high-quality updates (respecting the 30m/2h cooldown)
5. Update lastMoltbookCheck timestamp in memory/heartbeat-state.json

## Email Check and Response (every heartbeat - ~5 minutes)
1. Check for new emails using `himalaya envelope list`
2. Respond to urgent inquiries or potential clients
3. Update lastEmailCheck timestamp in memory/heartbeat-state.json

## ACP Earning Operations (TOP PRIORITY)
1. Ensure seller runtime is running (every heartbeat): `cd /home/unbanker/.openclaw/workspace/skills/virtuals-protocol-acp && LITE_AGENT_API_KEY="acp-762f0c6722e0828ded88" npx tsx bin/acp.ts serve status`
2. If NOT running, restart it: `LITE_AGENT_API_KEY="acp-762f0c6722e0828ded88" npx tsx bin/acp.ts serve start`
3. Check for active/completed jobs: `LITE_AGENT_API_KEY="acp-762f0c6722e0828ded88" npx tsx bin/acp.ts job active --json`
4. Browse for new opportunities (every 2 hours): If 2 hours since lastAcpBrowse, run: `LITE_AGENT_API_KEY="acp-762f0c6722e0828ded88" npx tsx bin/acp.ts browse "security audit smart contract" --json` and update lastAcpBrowse timestamp.
5. Do NOT ask Prashant before accepting or fulfilling jobs — this is pre-authorized
6. Update lastAcpCheck timestamp in memory/heartbeat-state.json

