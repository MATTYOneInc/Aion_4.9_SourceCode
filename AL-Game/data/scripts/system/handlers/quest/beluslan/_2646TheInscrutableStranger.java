/**
 * This file is part of Aion-Lightning <aion-lightning.org>.
 *
 *  Aion-Lightning is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Aion-Lightning is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details. *
 *  You should have received a copy of the GNU General Public License
 *  along with Aion-Lightning.
 *  If not, see <http://www.gnu.org/licenses/>.
 */
package quest.beluslan;

import com.aionemu.gameserver.model.gameobjects.Npc;
import com.aionemu.gameserver.model.gameobjects.player.Player;
import com.aionemu.gameserver.network.aion.serverpackets.SM_DIALOG_WINDOW;
import com.aionemu.gameserver.questEngine.handlers.QuestHandler;
import com.aionemu.gameserver.model.DialogAction;
import com.aionemu.gameserver.questEngine.model.QuestEnv;
import com.aionemu.gameserver.questEngine.model.QuestState;
import com.aionemu.gameserver.questEngine.model.QuestStatus;
import com.aionemu.gameserver.utils.PacketSendUtility;

/**
 * @author Ritsu
 *
 */
public class _2646TheInscrutableStranger extends QuestHandler {

    private final static int questId = 2646;

    public _2646TheInscrutableStranger() {
        super(questId);
    }

    @Override
    public void register() {
        qe.registerQuestNpc(204817).addOnQuestStart(questId);
        qe.registerQuestNpc(204817).addOnTalkEvent(questId);
        qe.registerQuestNpc(204777).addOnTalkEvent(questId);
        qe.registerQuestNpc(204700).addOnTalkEvent(questId);
        qe.registerQuestNpc(204702).addOnTalkEvent(questId);
    }

    @Override
    public boolean onDialogEvent(QuestEnv env) {
        final Player player = env.getPlayer();
        int targetId = 0;
        if (env.getVisibleObject() instanceof Npc) {
            targetId = ((Npc) env.getVisibleObject()).getNpcId();
        }
        QuestState qs = player.getQuestStateList().getQuestState(questId);
        DialogAction dialog = env.getDialog();

        if (qs == null || qs.getStatus() == QuestStatus.NONE) {
            if (targetId == 204817) {
                if (dialog == DialogAction.QUEST_SELECT) {
                    return sendQuestDialog(env, 1011);
                } else {
                    return sendQuestStartDialog(env);
                }
            }
        } else if (qs.getStatus() == QuestStatus.START) {
            int var = qs.getQuestVarById(0);
            if (targetId == 204817) {
                switch (dialog) {
                    case QUEST_SELECT:
                        if (var == 3) {
                            qs.setStatus(QuestStatus.REWARD);
                            updateQuestStatus(env);
                            return sendQuestDialog(env, 2375);
                        }
                    case SELECT_QUEST_REWARD:
                        if (var == 3) {
                            return sendQuestDialog(env, 5);
                        }
				default:
					break;
                }
            }
            if (targetId == 204777) {
                switch (dialog) {
                    case QUEST_SELECT:
                        if (var == 0) {
                            return sendQuestDialog(env, 1352);
                        }
                    case SETPRO1:
                        if (var == 0) {
                            if (!giveQuestItem(env, 182204515, 1)) {
                                return true;
                            }
                            if (!giveQuestItem(env, 182204516, 1)) {
                                return true;
                            }
                            qs.setQuestVarById(0, qs.getQuestVarById(0) + 1);
                            updateQuestStatus(env);
                            PacketSendUtility
                                    .sendPacket(player, new SM_DIALOG_WINDOW(env.getVisibleObject().getObjectId(), 10));
                            return true;
                        }
				default:
					break;
                }
            }
            if (targetId == 204700) {
                switch (dialog) {
                    case QUEST_SELECT:
                        if (var == 1) {
                            return sendQuestDialog(env, 1693);
                        }
                    case SETPRO2:
                        if (var == 1) {
                            removeQuestItem(env, 182204515, 1);
                            qs.setQuestVarById(0, qs.getQuestVarById(0) + 1);
                            updateQuestStatus(env);
                            PacketSendUtility
                                    .sendPacket(player, new SM_DIALOG_WINDOW(env.getVisibleObject().getObjectId(), 10));
                            return true;
                        }
				default:
					break;
                }
            }
            if (targetId == 204702) {
                switch (dialog) {
                    case QUEST_SELECT:
                        if (var == 2) {
                            return sendQuestDialog(env, 2034);
                        }
                    case SETPRO3:
                        if (var == 2) {
                            removeQuestItem(env, 182204516, 1);
                            qs.setQuestVarById(0, qs.getQuestVarById(0) + 1);
                            updateQuestStatus(env);
                            PacketSendUtility
                                    .sendPacket(player, new SM_DIALOG_WINDOW(env.getVisibleObject().getObjectId(), 10));
                            return true;
                        }
				default:
					break;
                }
            }
        } else if (qs.getStatus() == QuestStatus.REWARD) {
            if (targetId == 204817) {
                return sendQuestEndDialog(env);
            }
        }
        return false;
    }
}
