import type { ExecuteJobResult } from "../../runtime/offeringTypes.js";

export async function executeJob(job: any): Promise<ExecuteJobResult> {
  const { token_symbol, timeframe } = job.payload;
  const deliverable = `Market intelligence report for ${token_symbol} over the last ${timeframe} delivered by Aaga. Metrics: Sentiment, On-chain volume, whale movements.`;
  return { deliverable };
}
